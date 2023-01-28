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
