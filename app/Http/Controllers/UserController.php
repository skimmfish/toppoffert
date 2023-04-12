<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
        $allUsers = NULL;

    if($type=='all'){
    
        $allUsers = \App\Models\User::paginate(20);

    }else if($type=='deleted_users'){

        $allUsers = \App\Models\User::whereNotNull('deleted_at')->get();

    }else{
    
        $allUsers = \App\Models\User::where(['user_cat'=>strtoupper($type)])->orderBy('created_at','DESC')->paginate(20);    
    
    }
    
    return view('marketplace.sadmin.allusers',[
    'user_cat'=>strtoupper($type),
    'type'=>$type,
    'allusers'=>$allUsers,
    'title'=>'Alla Användare',
    'supObj' => new \App\Http\Controllers\SuppliersController]);
}


/***
 * SaveSupplier() function retrieves suppleir details and save them to database
 */
public function savesupplier(Request $req){

  try{
    $newsupplier= new \App\Models\Suppliers;
    $newUser = new \App\Models\User;

    $s_email = $req->email;

    $rule = [
    'email' => ['required','unique:users'],
    'address'=>['required','string'],
    'contactPerson'=>['required','string'],
    'company' => ['required','string'],
    'phoneNumber' => ['required']
    ];

    $messages = [
        'email' => 'The :attribute is required, check if this email has not been registered previously ',
        'address' => 'The :attribute is needed',
        'contactPerson' => 'The :attribute is required, make sure you enter two(2) names',
        'company' => ':attribute is required',
    ];

    $validator = Validator::make($req->all(), $rule, $messages);

    //$req->validate($rule);

    $username =explode("@",$s_email)[0];
    $pw = Str::random(8);
    $password = Hash::make($pw);
    $corp_name = $req->company;
    $date_registered = date('Y-m-d');
    $name = explode(" ",$req->contactPerson);
    $f_name = $name[0];
    $l_name = $name[1];
    $phone_no = $req->phoneNumber;
    $alt_phone = $phone_no;
    $address = $req->address;
    $city = $req->city;
    $province = $req->province;
    $zipcode = $req->zip_code;
    $business_email = $req->business_email;

  
    $lastID = \App\Models\User::insertGetId([
    //creating a user
    'email'=> $s_email,
    'business_email'=>$business_email,
    'username'=> strtolower($username.".".$f_name),
    'f_name'=>$f_name,
    'l_name'=>$l_name,
    'password'=>$password,
    'address' => $address,
    'province' => $province,
    'zip_code' => $zipcode,
    'phone_no' => $phone_no,
    'telephone' => $alt_phone,
    'user_cat' => 'SUPPLIER',
    'active'=>0,
    'email_verified_at'=>NULL,
    'created_at'=>date('Y-m-d h:i:s',time()),
    'updated_at'=>date('Y-m-d h:i:s',time()),
    'administrative_level'=>0
    ]);

    //$resp = $newU->id;

    //create a record for the supplier in the credits table
   $cr =  new \App\Models\Credits([
    'credits'=>0,
    'supplier_id'=>$lastID,
    'created_at'=>date('Y-m-d h:i:s',time()),
    'updated_at'=>date('Y-m-d h:i:s',time()),
   ]);

   //save recrod to credits table
   $cr->save();
   
    //setting the column fields
    $newsupplier->email = $s_email;
    $newsupplier->supplier_corp_name=$corp_name;
    $newsupplier->date_registered=$date_registered;
    $newsupplier->supplier_address = $address.', '.$zipcode.','.$province;
    $newsupplier->supplier_id = $lastID;
    $newsupplier->created_at = date('Y-m-d h:i:s',time());
    $newsupplier->updated_at = date('Y-m-d h:i:s',time());

    $res = $newsupplier->save();

    $msg = 'Vi kontaktar dig inom kort för att berätta mer. Under ordinarie arbetstider hör vi normalt av oss inom en timme.';
    
   // \Mail::to($s_email)->queue(new \App\Mail\NewSupplier($msg,$f_name,$s_email));
  }catch(\Exception $e){
 return redirect()->route("marketplace_suppliers_staging")->with(['message'=>'Fel! Kanske har du använt den e-postadressen tidigare']);
    
  }
    if($res==true){
 return redirect()->route("marketplace_suppliers_staging")->with(['message'=>'Vi kontaktar dig inom kort för att berätta mer. Under ordinarie arbetstider hör vi normalt av oss inom en timme.']);
}

}


/***
 * SaveSupplier() function retrieves suppleir details and save them to database
 */
public function createsupplier(Request $req){
    $newsupplier= new \App\Models\Suppliers;
    $newUser = new \App\Models\User;

    $s_email = $req->email;

    $rule = [
    'email' => ['required','unique:users','unique:suppliers'],
    'contactPerson'=>['required','string'],
    'company' => ['required','string'],
    'phoneNumber'=>['required']
    ];

    $messages = [
        'email' => 'The :attribute is required, check if this email has not been registered previously ',
        'address' => 'The :attribute is needed',
        'contactPerson' => 'The :attribute is required, make sure you enter two(2) names',
        'company' => ':attribute is required',
    ];

 //   $validator = Validator::make($req->all(), $rule, $messages);

    $req->validate($rule);

    $f_name = null;
    $name = explode(" ",$req->contactPerson);



    if(sizeof($name)==1){
    $f_name = $name[0];
    $l_name = '';
    }else if(sizeof($name)>1){
    $f_name=$name[0];
    $l_name = $name[1];
    }


    $username = explode("@",$s_email)[0].".".$f_name;
    $pw = Str::random(8);
    $password = Hash::make($pw);
    $corp_name = $req->company;
    $date_registered = date('Y-m-d');
    $name = explode(" ",$req->contactPerson);

    $phone_no = $req->phoneNumber;
    $alt_phone = $phone_no;
    $address = $req->address;
    $city = $req->city;
    $province = $req->province;
    $zipcode = $req->zip_code;
    $business_email = $req->business_email;

  
    $lastID = \App\Models\User::insertGetId([
    //creating a user
    'email'=> $s_email,
    'business_email'=>$business_email,
    'username'=>strtolower($username),
    'f_name'=>$f_name,
    'l_name'=>$l_name,
    'password'=>$password,
    'address' => $address,
    'province' => $province,
    'zip_code' => $zipcode,
    'phone_no' => $phone_no,
    'telephone' => $alt_phone,
    'user_cat' => 'SUPPLIER',
    'active'=>0,
    'email_verified_at'=>NULL,
    'created_at'=>date('Y-m-d h:i:s',time()),
    'updated_at'=>date('Y-m-d h:i:s',time()),
    'administrative_level'=>0
    ]);

    //$resp = $newU->id;

    //create a record for the supplier in the credits table
   $cr =  new \App\Models\Credits([
    'credits'=>0,
    'supplier_id'=>$lastID,
    'created_at'=>date('Y-m-d h:i:s',time()),
    'updated_at'=>date('Y-m-d h:i:s',time()),
   ]);

   //save recrod to credits table
   $cr->save();
   
    //setting the column fields
    $newsupplier->email = $s_email;
    $newsupplier->supplier_corp_name=$corp_name;
    $newsupplier->date_registered=$date_registered;
    $newsupplier->supplier_address = $address.', '.$zipcode.','.$province;
    $newsupplier->supplier_id = $lastID;
    $newsupplier->created_at = date('Y-m-d h:i:s',time());
    $newsupplier->updated_at = date('Y-m-d h:i:s',time());

    $res = $newsupplier->save();

    $msg = 'Vi kontaktar dig inom kort för att berätta mer. Under ordinarie arbetstider hör vi normalt av oss inom en timme.';
    
//    \Mail::to($s_email)->send(new \App\Mail\NewSupplier($msg,$f_name,$s_email));
if($res==1){
   return redirect()->back()->with(['message'=>$msg]);
}

}


/**
 * This function approves supplier
 * @param Integer <$supplier_id>
 */

public function approvesupplier($supplier_id){
$findSupplier = \App\Models\User::find($supplier_id);
$pw = Str::random(8);
$password = Hash::make($pw);

$response = \DB::update("UPDATE users SET active=?, password=?, email_verified_at=?, approval_status=? WHERE id=?",[
true,$password,date('Y-m-d h:i:s',time()),true,$supplier_id]);

$email = $findSupplier->email;
$f_name = $findSupplier->f_name;

$url = route('login');

$msg = "Tack för ditt intresse för att arbeta med Toppoffert, här är dina inloggningsuppgifter.

Hej! ".$f_name. "<br/>Användarnamn: ".$email."<br/>Lösenord: ".$pw.".

<a href='".$url."'>Logga in</a>

När du loggat in kan du byta lösenord under Kontoinställningar.

Hör av dig till oss om du har några frågor, vi finns här för att hjälpa dig.

Vänliga hälsningar,

Thank you.";


//send an email to the supplier with a login credentials
\Mail::to($email)->queue(new \App\Mail\SendApprovalSuppliermessage($f_name,$email,$pw,$url));

return redirect()->back()->with(['message'=>'Leverantören har godkänts, ett välkomstmail med inloggning har skickats!']);
}


/**
 * @param Integer <$id>
 * This functin updates the 
 */
public function updateUser(Request $req, $id){

$user = \App\Models\User::findOrFail($id);

    $user->f_name = $req->first_name;
    $user->l_name = $req->last_name;
    $user->business_email = $req->business_email;
    $user->telephone = $req->telephone;
    $user->phone_no = $req->alt_telephone;
    $user->address = $req->address;
    $user->province = $req->province;
    $user->pobox = $req->pobox;
    $user->c_o_address = $req->c_o_address;
    $user->receive_top_offers = $req->receive_top_offers;
    $user->welcome_msg_to_buyers = $req->welcome_msg_to_buyers;
    $user->save();

    return redirect()->route('contact-information')->with(['message'=>'Dina kontaktuppgifter har uppdaterats!']);

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
    $res = $user->forceDelete();

    if($res==1){
return redirect()->route('sa_all_users',['type'=>'all'])->with(['message'=>'Användaren Har Arkiverats!']);
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
            

/***
 * this function retrieves a data in the supplier's table using the primary key field of the table
 * @param String<$datafield>
 * @param Integer <$supplier_id>
 */
public static function get_data($datafield,$id){
    $columntoreturn = null;
    $data = \App\Models\User::where('id',$id)->first();
    
    if($data){
    
    $columntoreturn = $data->$datafield;
    
    }
    return $columntoreturn;
    
    }
    


    }
