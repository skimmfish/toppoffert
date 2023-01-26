<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::CLIENTS;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * @param Illuminate\Http\Request $request
     * @return void
     */
    public function customLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'email' =>    'required',
            'password' => 'required',
          ]);

           //validate all requests and it sends output to your login.blade.php
    
           if(!$validator->passes()){
              return response()->json([
                 'status'=>0, 
                 'error'=>$validator->errors()->toArray()
              ]);
            }
    
           $user_cred = $request->only('email', 'password');
            if (\Auth::attempt($user_cred)) {
                 //if user is logged in as a client
                if(\Auth()->user()->user_cat=='CLIENT'){  
                   //return response()->json([[1]]);
                   return redirect()->route('marketplace.clients');


                }  
    
            }else if(\Auth()->user()->user_cat=='SUPPLIER'){
                 //if user is a supplier
                   // return response()->json([[2]]);
                   return redirect()->route("suppliers.dashboard");

                   

            }else if(\Auth()->user()->user_cat=='SADMIN'){
               //IF the logged in user is a super admin   
               //return response()->json([[3]]);
               return redirect()->route('sadmin_index');
               
            }else{
               $error = ["Invalid login credentials"];

               $messageBag = new \Illuminate\Support\MessageBag($error);

               return redirect()->route('auth.login')->with(['message'=>$messageBag]);
               
            }
            //$error = 'Invalid Login Credentials';
            //flash::fail($error);
            //return redirect()->route('login')->with(['error'=>$error]);
         }

         
//end of class
}
