<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceRequestsController extends Controller
{
    

    public function index(){

        $top_request = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->first();
        $requests = \App\Models\ServiceRequests::where('customer_id','=',\Auth::user()->id)->get();

        return view('marketplace.clients.index',['top_request'=>$top_request,'requests'=>$requests]);
    }
}
