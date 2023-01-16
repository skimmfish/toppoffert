<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequests;

class ServiceRequestsController extends Controller
{
    

    public function index(){

        $top_request = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->first();
        $requests = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->orderBy('project_execution_status','ASC')->get();
        $messageCount = 0;
        $interested_supplier = 0;
        $offers = 0;

        return view('marketplace.clients.clients',['top_request'=>$top_request,'requests'=>$requests,
        'title'=>'Fofragningar - '.config('app.name'),'obj'=> new \App\Http\Controllers\ServiceRequestsController,
        'msgs'=>$messageCount,'offerCount'=>0,'interested_suppliers'=>$interested_supplier]);
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
 * @param Illuminate\Http\Request
 * @return Illuminate\Http\Response $response
 */

    public function newrequest(Request $request){

        $buyerRequest = new ServiceRequests;

        $buyerRequest->request_title = $request->WhatText;
        $buyerRequest->service = $request->WhatText;

    }
}
