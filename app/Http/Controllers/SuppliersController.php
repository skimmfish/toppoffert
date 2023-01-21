<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuppliersController extends Controller
{


    /**
     * Creating a new supplier's interest here
     * Send an email containing the password of the supplier to him/her after enrolling his interest to serve in Toppoffert
     */

     public function store(Request $request){

        $supplier = new Suppliers;
        $rule = ['email' => 'required | unique:suppliers | email'];
        $request->validate($rule);

        $supplier->supplier_email = $request->_email_address;
        //saving the supplier
        $supplier->save();
        
        if($response==true){
            \Mail::to($userEmail)->send(\App\Mail\NewSupplier());
            return redirect()->route('')->with(['status'=>'Thank you for your interest in Toppoffert! Please check your email for more info']);
        }
        
    }


/**
 * supplier_s rating
 */
public static function getRatings($supplier_id){




}


}
