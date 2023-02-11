<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditsController extends Controller
{
    
    public static function getCredits($supplier_id){

       try{
         $creditObj =  \App\Models\Credits::where('supplier_id',$supplier_id)->first();
       if($creditObj==NULL){
        $creditObj=array();
       }else{
        return $creditObj;
       }
        }catch(\Exception $e){
        return [];
       }
    }

    /**
     * This function assigns credits to suppliers
     * @param Integer <$supplier_id>
     * @param Double <$credit_amount> Amount to be assigned to a supplier
     */
    public function assignCredit(Request $request){
        $status = null;
        $credit_amount = $request->credit_amount;
        $supplier_id = $request->supplier_id;
       $findSupplier = \App\Models\Credits::where('supplier_id',$supplier_id)->first();
        if($findSupplier){
        $status =  \DB::update("UPDATE credits SET credits=credits+?, updated_at WHERE supplier_id=?",[$credit_amount,date('Y-m-d h:i:s',time()),$supplier_id]);
        }
if($status==1){
    return redirect()->route('sadmin_index')->with(['message'=>'Krediter tilldelade leverantören framgångsrikt']);
}else{
    return redirect()->route('sadmin_index')->with(['message'=>'Fel! vänligen kontrollera dina inlägg']);
}
}



/**
 * this function pulls up all the credits assigned to each 
 * supplier and here you also assign credits who has fulfilled their payment on invoice
 */
public function credit_portal(){
//fetch all users that are suppliers
$suppliers =  \App\Models\User::where(['user_cat'=>'SUPPLIER','active'=>true])->whereNotNull('email_verified_at')->get();

$suppliers = \DB::table('users')->join('credits',function($join){
    $join->on('credits.supplier_id','=','users.id')->where('users.user_cat','=','SUPPLIER');
})->paginate(10);

return view('marketplace.sadmin.credit_portal',['title'=>'Kredithanteringsportal',
'verified_suppliers'=>$suppliers]);

}

/**
 * this function assigns credits to suppliers with an adjusted credit expiry date
 * @param \Illuminate\Http\Request
 */
public function assign_credit(Request $req){

    $rule = [
        'credit'=>['required | integer']
    ];
    
    $req->validate($rule);

    $credits = $req->credits;
    $supplier_id = $req->supplier_id;
    $userEmail = \App\Models\User::find($supplier_id)->email;
    $f_name =  \App\Models\User::find($supplier_id)->email;
    
    \DB::update("UPDATE credits SET credits=credits+?, updated_at=? WHERE supplier_id=?",[$credits,date('Y-m-d h:i:s',time()),$supplier_id]);

    //send an email to the supplier
    $msg = "Dina kreditbegäran har uppdaterats framgångsrikt med ett justerat utgångsdatum på din portfölj. Vänligen logga in på din instrumentpanel för mer information.";
    
    \Mail::to($userEmail)->queue(new \App\Mail\SendMessage($f_name,$msg));

    return redirect()->back()->with(['message'=>'Krediter tilldelade framgångsrikt med ett justerat utgångsdatum']);
    



}
}
