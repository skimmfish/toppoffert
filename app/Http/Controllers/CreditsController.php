<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditsController extends Controller
{
    
    public static function getCredits($supplier_id){

       return $creditObj =  \App\Models\Credits::where('supplier_id',$supplier_id)->first();
        
    }
}
