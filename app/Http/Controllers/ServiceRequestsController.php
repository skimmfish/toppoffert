<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequests;

class ServiceRequestsController extends Controller
{
    
    public function __construct(){

    }

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

$allrequests = \App\Models\ServiceRequests::whereNull('deleted_at')->orderBy('created_at','DESC')->paginate(2);

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
public function approve_request($request_id){

\DB::update("UPDATE service_requests SET publish_status=? WHERE id=?",[true,$request_id]);

}
}
