<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;


class SuppliersController extends Controller
{


    /**
     * Creating a new supplier's interest here
     * Send an email containing the password of the supplier to him/her after enrolling his interest to serve in Toppoffert
     */

     public function store(Request $request){

        $supplier = new Suppliers;
        $rule = ['email' => 'required | unique:suppliers | email:rfc,dns'];
        $request->validate($rule);

        $supplier->supplier_email = $request->email;
        //saving the supplier
        $supplier->save();
        
        if($response==true){
            \Mail::to($userEmail)->send(\App\Mail\NewSupplier());
            return redirect()->route('')->with(['status'=>'Thank you for your interest in Toppoffert! Please check your email for more info']);
        }
        
    }

    /**
     * this function fetches and parses the service category areas for a supplier based on the supplier's id
     * @param Integer $uid
     */
public static function getServiceAreas($uid){

$suppliersCoverage = array();

try{
$supplier = Suppliers::where(['supplier_id'=>$uid])->first();

if($supplier!=null){
 $suppliersCoverage = [
'categories'=>$supplier->service_category,
'subcategories'=>$supplier->service_sub_categories,
'assignment_size'=>$supplier->assignment_size,
'buyers_type'=>$supplier->buyers_type
]; 
}else{
    $suppliersCoverage = [
        'categories'=>[],
        'subcategories'=>[],
        'assignment_size'=>[],
        'buyers_type'=>[]  
    ];
}

    }catch(\Exception $e){
        $suppliersCoverage = [];
}

return $suppliersCoverage;
}



/**
 * @param Integer <$type_id>
 * @return String <$buyer_type_name>
 * This function fetches the buyer_type's name for the supplied type_id
 */
public static function getBuyerTypeName($type_id){
$buyer_type_name = null;
    try{

    $typeObj = \App\Models\BuyerType::where('id',$type_id)->first();
    if($typeObj!=NULL)
    return $buyer_type_name = $typeObj->buyers_type_name;
    }catch(\Exception $e){

        return [];
}
}

/**
 * This function sends docs link to the supplier to sign
 * @param Integer <$uid>
 */
public function senddocs($username){

    $this->username = $username;
    $this->supObject = new \App\Http\Controllers\SuppliersController;
    try{

    $supplier = \App\Models\User::where('username',$username)->first();
    $f_name = $supplier->f_name;
    
   
     $this->uid = $supplier->id;

    $request = \DB::table('suppliers')->join('users',function($join){
        $join->on('users.id','=','suppliers.supplier_id')->where('users.id','=',$this->uid);
    })->first();

    $hyphenatedStr = $this->createhypenatedstring(128);
    //update Supplier's record

    $smsCode = Str::random(6);


    if($request->docs_hash==NULL){   
    \DB::update("UPDATE suppliers SET docs_hash=?,updated_at=?, sms_code=? WHERE supplier_id=?",[$hyphenatedStr,date('Y-m-d h:i:s',time()),$smsCode,$this->uid]);     
    }else{
    
        \DB::update("UPDATE suppliers SET sms_code=? WHERE supplier_id=?",[$smsCode,$this->uid]);     
    
    }

    $supplier_dochash = \App\Models\Suppliers::where('supplier_id',$this->uid)->first()->docs_hash;
    
    //the url to send will lead to docstart
    $url = url('/').'/su/offerter/'.$supplier_dochash;

    //sending an email to the supplier here
    \Mail::to($request->email)->queue(new \App\Mail\SendBusinessDocs($f_name,$url));
    
    /*$msg = "Dear $f_name, this message is coming to your because you opted to be a service supplier with ".config('app.name')."Please kindly take note of your approval SMS code: $smsCode, 
    kindly navigate to this link - $url to approve the business documents. Thank you";
*/

        $msg =  "Kära $f_name Här kommer din offert från ToppOffert! Med vänliga hälsningar! ToppOffert.se - $url";

        $this->supObject->httpSendSms($request->phone_no,$msg);

}catch(\Exeption $e){
    echo $e->getMessage();
}
    //send email to the user with the url
}


/**
 * This function sends SMS using the HTTP client structure
 * @param String <$user> API username
 * @param String <$pass>
 * @param String <$nr> Receiver's phone number
 * @param String <$sender> Site owner
 * @param Text    <$msg>
 */

public function httpSendSms($nr,$msg){

$token = \App\Http\Controllers\ConfigController::get_value('sms_token');

//$token = "token_api_oauth"; //https://portal.smsapi.se/react/oauth/manage

$params = array(
    'to'            => $nr,         //destination number  
    'from'          => 'ToppOffert',                 
     //sendername made in https://portal.smsapi.se/sms_settings/sendernames 
    'message'       => $msg,    //message content
    'format'        => 'json',           
);

return $this->sms_send($params,$token);
}


/**generic function for sending sms to phone numbers 
 * 
*/
public function sms_send($params, $token)
{

    static $content;


        $url = 'https://api.smsapi.se/sms.do';

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $params);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $token"
    ));

    $content = curl_exec($c);
    $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

    if ($http_status != 200) {
        sms_send($params, $token);
    }

    curl_close($c);
    return $content;
}



/**
 * This function generate the info for the documents
 */
public function getSupplierInfoForDocs($hash){

    $this->hash = $hash;
    
    $request = \DB::table('users')->join('suppliers',function($join){
        
        $join->on('users.id','=','suppliers.supplier_id')->where('suppliers.docs_hash','=',$this->hash);

    })->first();

 
    return view('marketplace.suppliers.view_docs_details',['hash'=>$request->docs_hash.'_'.$request->supplier_id,
    'supplier_id'=>$request->supplier_id,
    'title'=>'Affärsdokument och avtalsundertecknare','last_updated'=>$request->updated_at]);

}

/**
 * this function returns hypenated string with dashes in between
 * @param Integer <$size>
 */
public function createhypenatedstring($size){

    $string =  Str::random($size);
   
    return strtolower(substr(chunk_split($string, 10, '-'), 0, 24));
   
   }
   
/**
 * @param Request <$req>
 * @return boolean
 * this function sends message to the buyer as bid for the request
 */
public function sendbid(Request $req){
    $this->obj = new \App\Http\Controllers\SuppliersController;

  $messageToSend =  $req->request_response;
  $main_file= NULL; $other_file = NULL; $quote_file_name = NULL;

  if($req->file('filer')!=NULL && $req->file('filer')->isValid()){
     echo $main_file = $this->saveFile($req,'filer','img/requests');
  }

  if($req->file('other_filer')!=NULL && $req->file('other_filer')->isValid()){
    echo $other_file = $this->saveFile($req,'other_filer','img/requests');
  }

  if($req->file('quote_filer')!=NULL &&  $req->file('quote_filer')->isValid()){
   echo $quote_file_name = $this->saveFile($req,'quote_filer','img/requests');
  }

  $msgId = \App\Models\RequestChats::insertGetId([

    'buyer_id'=>$req->buyer_id,
    'supplier_id'=>$req->supplier_id,
    'request_id'=>$req->request_id,
    'message'=>$messageToSend.'__@_seller_msg',
    'created_at'=>date('Y-m-d h:i:s',time()),
    'updated_at'=>date('Y-m-d h:i:s',time()),
    'file_info'=>$main_file.'@__'.$other_file.'@__'.$quote_file_name
  ]);

//  $msgId->save();

    return redirect()->back()->with(['message'=>'Meddelande skickat till kund']);
}

/***
 * this function is for e-Signing the business documents
 */

public function acceptoffer($hash){

$supplierID = explode("_",$hash)[1];

$supplier = \App\Models\Suppliers::where('supplier_id','=',$supplierID)->first();

$supplierID = $supplier->id;

$supplierById = \App\Models\Suppliers::find($supplierID);

$supplierById->signed_business_docs = true;
$supplierById->save();
$info = 'Tack för att du accepterar'.config('app.name').' offert, vi uppskattar att du kommer och vi är villiga att se till att du får en fantastisk upplevelse på vår plattform!';
return redirect()->route('marketplace.suppliers.view_confirmation_details',['info'=>$info]);

}

/**
 * @param \Illuminate\Http\Request
 * @param String <$formFieldHandler>
 * @param String location<$location>
 */
public function saveFile(Request $request,$formFieldHandler,$location){
        
    $fileName = NULL;
    //validating if a file is uploaded
    if($request->file($formFieldHandler)->isValid()){
    $fileName = time().'.'.$request->$formFieldHandler->guessExtension();
    
    $request->$formFieldHandler->move(public_path($location),$fileName);   

}else{
    flash('No file was uploaded')->fail();
    return redirect()->back()->with('message','No file was uploaded, kindly check and try again');
}

return $fileName;
}


 /**
 * supplier_s rating
 */
public static function getRatings($supplier_id){

}

/***
 * this function retrieves a data in the supplier's table using the primary key field of the table
 * @param String<$datafield>
 * @param Integer <$supplier_id>
 */
public function get_supplier_data($datafield,$supplier_id){
$columntoreturn = null;
$data = \App\Models\Suppliers::where('supplier_id',$supplier_id)->first();

if($data){

$columntoreturn = $data->$datafield;

}
return $columntoreturn;

}

}
