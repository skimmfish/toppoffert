<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;



class InvoicesController extends Controller
{
    public function index(){

      return Invoices::all();

    }


    /**
     * @param Integer <$uid>
     * @param Illuminate\Http\Response <$reponse>
     */
    public static function getall($uid){

    return Invoices::where(['supplier_id'=>$uid])->orderBy('created_at','DESC')->get();

    }

public function edit(){


}

public function delete($id){


}

public function store(Request $request){


    
}

}
