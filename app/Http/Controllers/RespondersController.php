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


    /**
     * this function sends message to the seller
     */
    public function sendmsgtoseller(Request $req){

      $supObj = new \App\Http\Controllers\SuppliersController;

      $messageToSend =  $req->request_response;
      $main_file= NULL; $other_file = NULL; 
      $quote_file_name = NULL;
    
      if($req->file('filer')!=NULL && $req->file('filer')->isValid()){
       $main_file = $supObj->saveFile($req,'filer','img/requests');
      }
    
      if($req->file('other_filer')!=NULL && $req->file('other_filer')->isValid()){
       $other_file = $supObj->saveFile($req,'other_filer','img/requests');
      }
      
      $buyer_id = $req->buyer_id;
      $supplier_id = $req->supplier_id;
      $request_id  = $req->request_id;
    
      $request = \App\Models\ServiceRequests::where(['id'=>$request_id])->first();
      $msgId = \App\Models\RequestChats::insertGetId([
        'buyer_id'=>$req->buyer_id,
        'supplier_id'=>$req->supplier_id,
        'request_id'=>$req->request_id,
        'message'=>$messageToSend.'__@_buyer_msg',
        'created_at'=>date('Y-m-d h:i:s',time()),
        'updated_at'=>date('Y-m-d h:i:s',time()),
        'file_info'=>$main_file.'@__'.$other_file
      ]);

      //creating or updating an existing file
      //check if the request exists previously
      $isExist = \App\Models\FileManager::where('request_id',$request_id)->first();
      if(is_null($isExist)){

      $newfile = new \App\Models\FileManager([

        'request_id'=>$request_id,
        'sent_by'=>$buyer_id,
        'file_name'=>$main_file.'@__'.$other_file,
        'created_at'=>date('Y-m-d h:i:s',time()),
        'updated_at'=>date('Y-m-d h:i:s',time())
     ]);

     $newfile->save();

    }else{
      //only do an update
      \DB::update("UPDATE file_managers SET file_name=file_name.? WHERE request_id=?",
      ['@__'.$main_file.'@__'.$other_file, $request_id]);
    }


    $messages = \App\Models\RequestChats::where('request_id',$request_id)->orderBy('created_at','ASC')->get();
  
      return redirect()->route('chat_with_supplier',['request_id'=>$supplier_id,'request_hash'=>$request->request_hash,'supplier_id'=>$supplier_id]);
      
   }
  }
