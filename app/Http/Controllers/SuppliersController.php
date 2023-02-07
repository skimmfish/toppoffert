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
     * this function fetches and parses the service category areas for a supplier based on the supplier's id
     * @param Integer $uid
     */
public static function getServiceAreas($uid){

    try{
$supplier = Suppliers::where(['supplier_id'=>$uid])->first();
if($supplier!=null){

return $suppliersCoverage = [
'categories'=>$supplier->service_category,
'subcategories'=>$supplier->service_sub_categories,
'assignment_size'=>$supplier->assignment_size,
'buyers_type'=>$supplier->buyers_type
]; 

}
    }catch(\Exception $e){
        echo $e->getMessage();
        return [];
}

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

        echo $e->getMessage();
    }
}

/**
 * @param Request <$req>
 * @return boolean
 * this function sends message to the buyer as bid for the request
 */
public function sendbid(Request $req){



    
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
