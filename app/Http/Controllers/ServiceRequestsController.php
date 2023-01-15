<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequests;

class ServiceRequestsController extends Controller
{
    

    public function index(){

        $top_request = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->first();
        $requests = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->get();

        return view('marketplace.clients.clients',['top_request'=>$top_request,'requests'=>$requests,'title'=>'Fofragningar - '.config('app.name')]);
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
