<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    use ThrottlesLogins;
    protected $maxLoginAttempts=5;
    protected $lockoutTime=300;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /***
     * This function fetches a paginated list of all users based on their types => SUPPLIER/CLIENT(buyer)/SADMIN
     * @param String <$type>
     */
    public function sa_all_users($type){

    if($type=='all'){
    $allUsers = \App\Models\User::whereNotNull('email_verified_at')->where(['active'=>true])->orderBy('created_at','DESC')->paginate(20);
    }else if($type=='deleted_users'){

        $allUsers = \App\Models\User::onlyThrashed()->get();

    
    }else{
        $type = strtoupper($type);
        $allUsers = \App\Models\User::whereNotNull('email_verified_at')->where(['active'=>true,'user_cat'=>$type])->orderBy('created_at','DESC')->paginate(20);    
    }
    
    return view('marketplace.sadmin.allusers',[
    'user_cat'=>strtoupper($type),
    'type'=>$type,
    'allusers'=>$allUsers,
    'title'=>'Alla Användare',
    'supObj' => new \App\Http\Controllers\SuppliersController]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request){

    $rules = [

        'email'=> 'required | email:rfc,dns | unique:users',
        'username' => 'required | unique:users',
        '_password' => 'required | min:8 | max:30',
        'first_name'=>'required | String',
        'last_name'=>'required | String'


    ];

    $validationReport = $request->validate($rules);

$user = new User;
$user->email = $request->email;
$user->password = bcrypt($request->input('_password'));
$user->username = $request->input('username');
$f_name = $request->first_name;
$l_name = $request->last_name;
$aff_code = $request->aff_code;
$user->personal_aff_code = strtolower($this->user::generateCode(5));
$user->active = 0;
$user->is_admin = 0;
$user->administrative_level = 0;

$user->save();
return response()->json(['message'=>"User's profile saved successfully"],200);


}


/**
 * @param Iluminate\Http\Request $request
 * @param Integer <$uid>
 * @return NULL
 * This function modifies users' password from the dashboard
 */
public function modifyPasswordFromDashboard(Request $request,$uid){

    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required | min:8',
    ]);

if(Hash::check($request->old_password, auth()->user()->password)){

    $status = User::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password)
    ]);

    
    //redirect to the logout page after updating the password
    \Auth::logout();

    //return redirect()->route('login')->with('message','Your password has been modified');

    return $status === Password::PASSWORD_RESET ? redirect()->route('login')->with('status', __($status)): back()->withErrors(['email' =>'Error!']);

    }else{
        //return to the dashboard
       return redirect()->back()->with('error','Ditt nuvarande lösenord är ogiltigt');
    }
}

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
		$user->save($request->all());
		flash("User profile updated successfully")->success();		
		return redirect()->route('sa_all_users')->with(['type'=>'all','message'=>'User profile updated successfully']);
    }
    

/**
     * Remove the specified resource from being active by setting the deleted_at column to the current datetime.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        \DB::table('users')->where('id',$id)->update(["deleted_at"=>date('Y-m-d h:i:s',time())]);
        \DB::table('profiles')->where('user_id',$id)->update(["deleted_at"=>date('Y-m-d h:i:s',time())]);
        
        flash('User archived successfully!');
        return redirect()->route('sa_all_users')->with(['message'=>'User archived successfully!','type'=>'all']);
        }
        
    /**
 * @param Integer <$id>
 * This function deletes an account on softdelete
 */
public function deleteaccount($id){
    $user = \DB::update("UPDATE users SET deleted_at=?, active=? WHERE id=?",[date('Y-m-d h:i:s',time()),false,$id]);
    return redirect()->route('login')->with(['message'=>"Your account has been deleted successfully, thank you."]);
}


/**
 * This function softdeletes a resource
 */
public function delete_user($id){
    $user = \App\Models\User::find($id);
    $res = $user->delete();

    if($res==1){
return redirect()->route('sa_all_users')->with(['message'=>'Användaren Har Arkiverats!']);
    }
    //\App\Models\User::softDelete($id)

}

/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id){

        $user = User::onlyTrashed()->where('id',$id)->forceDelete();
        $msg = "User profile completely deleted successfully";
        
        //flashing session storage
        flash($msg)->success($msg);
        
        return redirect()->route('sa_all_users',['type'=>'all'])->with('message',$msg);
        }


        /** This function sets a user as an admin with a restricted administrative priviledges
        * @param Integer <$id>
        * @return Illuminate\Http\Response
        */

        public function setAdmin($id,$status){
            $res =   \DB::update("UPDATE users SET is_admin=? WHERE id=?",[$status,$id]);
            return redirect()->route("admin.dashboard.core-admin.allusers",['type'=>'all'])->with(['message'=>"User's admin right modified"]);
            }
            
            /**
             * 
             */
            public function setsadmin($id,$sadmin){
            
                $res =   \DB::update("UPDATE users SET administrative_level=? WHERE id=?",[$sadmin,$id]);
            return redirect()->route("admin.dashboard.core-admin.allusers",['type'=>'all'])->with(['message'=>"User's admin right modified"]);
                
            }
            


    }
