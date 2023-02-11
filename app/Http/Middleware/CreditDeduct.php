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

           $ifStatus = \App\Models\Responders::where(['credit_deducted_for_supplier'=>true,'supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id,'request_id'=>$request_id])->get();
            if(sizeof($ifStatus)>0){
          // if($ifStatus!=NULL)
        //  if($status==true){
            return $next($request);
            
        }else{
            //deduct from here, and redirect the user accordingly
            //check if the supplier's credit hasn't expired or offlimits
            
            $creditStatus = \App\Models\Credits::where(['supplier_id'=>$supplier_id])->first();
            $deduct = \App\Models\Responders::where(['supplier_id'=>$supplier_id,'request_id'=>$request_id,'credit_deducted_for_supplier'=>false])->get();
            //responders eli

        if(sizeof($deduct)>0 && $creditStatus->credits>0)
            
            $res = \DB::update("UPDATE credits SET credits=credits-? WHERE supplier_id=?",[1,$supplier_id]);
                $credUpdate = \DB::update("UPDATE responders SET credit_deducted_for_supplier=? WHERE supplier_id=? AND request_id=?",[true,$supplier_id,$request_id]);

                if($credUpdate=!null){

                    //return redirect()->route('reach_out_to_buyer_action',['id'=>$request_id,'supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id]);
                    return $next($request);
           
                }
        }
    }
    }
}
