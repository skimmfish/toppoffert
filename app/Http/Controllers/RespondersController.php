<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespondersController extends Controller
{
    

    /**
     * This function returns the number of responders for a particular request
     * @param Integer <$request_id>
     * @return Integer <$responder_count>
     */
    public static function get_responders_count($request_id){
      return $responder_count = sizeof(\App\Models\Responders::where(['request_id'=>$request_id,'credit_deducted_for_supplier'=>true])->get());
    }


}
