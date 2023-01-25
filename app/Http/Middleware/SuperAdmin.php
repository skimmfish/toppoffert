<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdmin
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

        if ($request->user())
        {
         if ($request->user()->is_admin == true && $request->user()->active==1 && $request->user()->administrative_level>=2){

            return $next($request);

            }else{
     
           return redirect()->route('unauthorized')->with('title','You are not permitted to view this page!');
     
         }
         }
     
    }
}
