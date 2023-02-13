<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequests;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ServiceRequestsController extends Controller
{

   protected $serviceObj;
   protected $serviceModel;

    public function __construct(){
      $this->serviceModel = new ServiceRequests;
   }



   /**
    * @param Request <$req>
    * @return Resultset
    */
public function searchservicecat(Request $req){

   $service_type = $req->get('query');
   return response()->json($filterResult);
   $filterResult = Categories::where('cat_name', 'LIKE', '%'. $service_type. '%')->get();
   return response()->json($filterResult);

}

/**
 * this function retrieves and stores a sample buyer request, tagged with a supplier whose line of service category fits in
 * @param Request <$request>
 * @return NULL
 */
public function store(Request $request){

   $newRequest = new ServiceRequests;
   $f_name = $request->Name;
   $pw = Str::random(8);
   $password = Hash::make($pw);
      $email = $request->Email;
      $last_id = $user = User::insertGetId([
      'f_name' => $f_name,
      'username' => explode('@',$email)[0],
      'email' => $email,
      'password' => $password,
      'business_email' => $email,
      'user_cat' => 'CLIENT',
      'phone_no' => $request->Phone,
      'zip_code' => $request->postCode,
      'active'=>0,
      'email_verified_at'=>NULL,
      'created_at'=>date('Y-m-d h:i:s',time()),
      'updated_at'=>date('Y-m-d h:i:s',time()),
      'administrative_level'=>0
   ]);


   $subCategory = $request->sub_category;

   $main_service_cat = explode("_",$subCategory)[1];
   $subcat_id = explode("_",$subCategory)[2];
   $newRequest->request_hash = $this->createhypenatedstring(36);
   $newRequest->postcode = $request->PostCode;
   $newRequest->when_to_be_contacted = $request->whentobecontacted;
   $newRequest->customer_id = $last_id;
   $newRequest->when_to = $request->When_to;
   $newRequest->request_title = $request->Description;
   $newRequest->mission_type=$request->Description;
   $newRequest->service_cat = $main_service_cat;
   $newRequest->subservice_cat = $subcat_id;
   $newRequest->postal_code_of_assignment = $request->PostCode;
   $newRequest->executed_for = $request->executed_for;
   $newRequest->request_type = explode("_",$subCategory)[0];
   $newRequest->buyer_telephone = $request->Phone;
   $newRequest->save();
   //$newRequest-save();
   $msg = null;
   $requestScope=null;
   
   $supplier_count = 0;
   \Mail::to($email)->queue(new \App\Mail\RequestUpdate($requestScope,$f_name,$msg,$supplier_count,
   $request->Description));

   return redirect()->route('clients_staging_area')->with(['message'=>'Din förfrågan har skickats till 100-tals företag, vänligen vänta tills de når dig']);
}



/**
 * this function returns hypenated string with dashes in between
 * @param Integer <$size>
 */
public function createhypenatedstring($size){

 $string =  Str::random($size);

 return strtolower(substr(chunk_split($string, 4, '-'), 0, 24));

}

   /**
    * This function redirects to the clients dashboard where they can look into the requests and respond to suppliers' feeds
    */
    public function index(){

        $top_request = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->first();
        $requests = \App\Models\ServiceRequests::where(['customer_id'=>\Auth::user()->id,'archival_status'=>false])->orderBy('project_execution_status','ASC')->get();
        $archivedrequest = \App\Models\ServiceRequests::where(['customer_id'=>\Auth::user()->id,'archival_status'=>true])->get();
                
        $messageCount = 0;

        $interested_supplier = 0; $offers = 0;

        return view('marketplace.clients.clients',['top_request'=>$top_request,'requests'=>$requests,
        'title'=>'Fofragningar - '.config('app.name'),'obj'=> new \App\Http\Controllers\ServiceRequestsController,
        'msgs'=>2,'offerCount'=> 0,'interested_suppliers'=>$interested_supplier,'archivedrequest'=>$archivedrequest,'supplierObj'=>new \App\Models\Suppliers]);
 }


 /**
  * This function delete resources based on the specified resource
  */
public function deleteResources($type,$resource,$id){
   try{
   if($resource=='buyer_requests'){
      $requestObj = \App\Models\ServiceRequests::find($id);
      $rdelete = $requestObj->delete();
   
      
  }

}catch(\Exception $e){
   echo $e->getMessage();
}
  
return redirect()->route('sadmin_all_requests')->with(['message'=>'Resurser har tagits bort']);

}

 /**
  * This function gets all the offers sent by suppliers for a particular request from buyers
  * @param Integer <$request_id>
  * @return Array <$offers>
  */
 public function getOffers($request_id,$user_id){

    $offers = array();

    $off = \App\Models\Offers::where(['request_id'=>$request_id,'buyer_id'=>$user_id])->get();

    return $offers = [
    'offer_count' => sizeof($off),
    'offerStdOut'=>$off
   ];
}



/**
 * @param Integer <$request_id>
 * @param Integer <$user_id>
 * This function returns the suppliers, their count and their response object
 */

 public function getInterestSuppliers($request_id,$user_id){

    $suppliers = array();

    $suppliers = \App\Models\Responders::where(['request_id'=>$request_id,'buyer_id'=>$user_id])->get();

    return $suppliers = [
    'supplier_count' => sizeof($suppliers),
    'suppliersInterested'=>$suppliers
   ];
}


/**
 * @param String <$hash>
 * This function pulls up using livewire to pull up all the suppliers info and request responses
 */
public function enquiries_suppliers($hash){


}
/**
 * @param Illuminate\Http\Request
 * @return Illuminate\Http\Response $response
 */

    public function newrequest(Request $request){

        $buyerRequest = new ServiceRequests;
        $buyerRequest->request_title = $request->WhatText;
        $buyerRequest->service = $request->WhatText;

    }

    /**
     * @param String <$field> - Column name
     * @param Integer <$request_id>
     */

public static function get_request_metadata($field,$request_id){

 return \App\Models\ServiceRequests::where('id',$request_id)->first()->$field;

}

/**
 * @param NULL
 * @return StdObj
 * This function returns all requests grouped with their created_at column
 *  */

public function allbuyersrequest(){

$allrequests = \App\Models\ServiceRequests::whereNull('deleted_at')->orderBy('created_at','DESC')->orderBy('publish_status','DESC')->paginate(2);

return view('marketplace.sadmin.buyer_requests',['title'=>"Köparnas önskemål",'allrequest'=>$allrequests]);

}


/**
 * 
 */
public function get_all_sales(){

$allrequests = \App\Models\ServiceRequests::whereNull('deleted_at')->where('project_execution_status',true)->orderBy('created_at','DESC')->paginate(10);

return view('marketplace.sadmin.buyer_requests',['title'=>"Förfrågningar vände försäljning",'allrequest'=>$allrequests]);


}

/***
 * @param Integer $request_id
 * @param Integer $action_id
 */
public function approve_request($request_id,$buyer_id){

$res = \DB::update("UPDATE service_requests SET publish_status=? WHERE id=?",[true,$request_id]);

//send a notification to buyer of his request been approved
$buyer_id = $this->get_request_metadata('customer_id',$request_id);
$request_title =$this->get_request_metadata('request_title',$request_id);
$email = \App\Models\User::get_data('email',$buyer_id);
$f_name = \App\Models\User::get_data('f_name',$buyer_id);

$pw = Str::random(8);
$password = Hash::make($pw);

//update the password first before sending it to the user
\DB::update("UPDATE users SET password=? WHERE id=?",[$password,$buyer_id]);

$no_of_coy = 10;

\Mail::to($email)->send(new \App\Mail\SendApprovalMessage($f_name,$request_title,$no_of_coy,$email,$pw));

return redirect()->back()->with(['message'=>'Köparens Begäran Godkändes']);
}


/**
 * This set of functions deals directly with the requests sent in by buyers
 */
public function viewservicerequest($hash){

   $request = \App\Models\ServiceRequests::where('request_hash','=',$hash)->first();

/*   $request = \DB::table('service_requests')->join('categories',function($join){

      $join->on('categories.id','=','service_requests.service_cat')->where('service_requests.request_hash','=',$rhash);
  })->get();
*/
$requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
$catCount = sizeof(\App\Models\Categories::all());

//$credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;


return view('pages.request_view')->with(['requestBody'=>$request,
'supplierObj'=>new \App\Models\Suppliers,
'title'=>$request->request_title,
'request_count'=>sizeof($requests),
'related'=>$this->getRelatedRequests($request->service_cat)]);
}



/**
 * This set of functions deals directly with the requests sent in by buyers
 */
public function previewRequest($hash){

   $request = \App\Models\ServiceRequests::where('request_hash','=',$hash)->first();

/*   $request = \DB::table('service_requests')->join('categories',function($join){

      $join->on('categories.id','=','service_requests.service_cat')->where('service_requests.request_hash','=',$rhash);
  })->get();
*/
$requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
$catCount = sizeof(\App\Models\Categories::all());

//$credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;


return view('pages.previewrequrestsa')->with(['requestBody'=>$request,
'supplierObj'=>new \App\Models\Suppliers,
'title'=>$request->request_title,
'request_count'=>sizeof($requests),
'related'=>$this->getRelatedRequests($request->service_cat)]);
}

/**
 * @param Integer <$cat_id> for the request beeing shown
 * @return $responseObj containing resources with the same request type
 */
public function getRelatedRequests($cat_id){

   return $related = \App\Models\ServiceRequests::where('service_cat',$cat_id)->take(6)->paginate(2);

}


/**
 * @param none
 * @return $StdObj
 */
public function mysales(){
   $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
   $catCount = sizeof(\App\Models\Categories::all());
   $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;
   
$sales =  \App\Models\ServiceRequests::where(['project_execution_status'=>1])->get();
return view('marketplace.suppliers.sales',['title'=>'Försäljning',
'category_count'=>$catCount,
'request_count'=>sizeof($requests),'supplierObj'=>new \App\Models\Suppliers,
'sales'=>$sales]);

}
/**
 * This function prints out the tab for displaying number of responders yet to respond
 */

public function createresponderstab($responders){

   
}

/***
 * This function sends message to the buyer who submitted the request
 */
public function sendmessagetobuyer($id,$supplier_id){



}

}
