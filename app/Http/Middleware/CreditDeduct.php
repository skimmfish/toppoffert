<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CreditDeduct
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(\Auth::check()) //this confirms if the user is logged in
        {
            //check if the user has paid for the very request he is trying to see the customer's id
           $buyer_id = $request->route('buyer_id');
           $supplier_id = $request->route('supplier_id');
           $request_id = $request->route('id');

           $ifStatus = \App\Models\Responders::where(['credit_deducted_for_supplier'=>true,'supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id,'request_id'=>$request_id])->first();
            if(!is_null($ifStatus)){
          // if($ifStatus!=NULL)
        //  if($status==true){
            return $next($request);
            
        }else{
            //deduct from here, and redirect the user accordingly
            //check if the supplier's credit hasn't expired or offlimits
            
            $creditStatus = \App\Models\Credits::where(['supplier_id'=>$supplier_id])->first();
            $deduct = \App\Models\Responders::where(['supplier_id'=>$supplier_id,'request_id'=>$request_id,'credit_deducted_for_supplier'=>false])->get();
            //responders eli

        if($creditStatus->credits>0)
            
        $resMsg = \App\Models\Suppliers::where(["supplier_id"=>$supplier_id])->first()->welcome_msg_to_buyers;

            $res = \DB::update("UPDATE credits SET credits=credits-? WHERE supplier_id=?",[1,$supplier_id]); 

            $msgToBuyer = new \App\Models\Responders([
                'supplier_id'=>$supplier_id,
                'buyer_id'=>$buyer_id,
                'request_id'=>$request_id,
                'responder_msg'=>$resMsg,
                'time_sent'=>date('Y-m-d h:i:s',time()),
                'credit_deducted_for_supplier'=>true,
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ]);

            $credUpdate = $msgToBuyer->save();
            
                if($credUpdate=!null){

                    //return redirect()->route('reach_out_to_buyer_action',['id'=>$request_id,'supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id]);
                    
                    return $next($request);
           
                }
        }
    }
    }
}
