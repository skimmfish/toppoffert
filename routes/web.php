<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//homepage
Route::get('/', function () {
    return view('index')->with(['title'=>'Vi hjälper dig hitta rätt tjänsteföretag']);
})->name('index');

//unauthorized/non/unauthenticated users goes here
Route::get('/authorized',function(){
    return view('errors.unauthorized')->with(['title'=>'Unauthorized']);
})->name('unauthorized');

//for running finder search for service companies
Route::get('/finder',function(){
    
})->name('finder_search');

//yrkeskategorier page
Route::get('/anslut-ditt-foretag/yrkeskategorier',function(){
    return view('pages.yrkeskategorier',['title'=>'Inom vilken bransch vill du bli framgångsrik?']);
})->name('yrkeskategorier');

//Pris
Route::get('/anslut-ditt-foretag/pris',function(){
    return view('pages.pris',['title'=>'Affarspaket']);
})->name('pris');

//intresseanmalan
Route::get('/anslut-ditt-foretag/intresseanmalan',function(){
    return view('pages.intresseanmalan');
})->name('intresseanmalan');

//Route for ancilliary pages
Route::get('anslut-ditt-foretag',function(){
    return view('pages.anslut-ditt-foretag',['title'=>'Anslut Ditt Foretag']);
})->name('anslut-ditt-foretag');
//authentication routes
//Authentication and authorization interfaces route
Auth::routes(['verify'=>true]);


Route::get('/kontact-os',function(){
    return view('pages.kontactos',['title'=>'Kontakta Oss']);
})->name('kontactos-pg');

Route::get('skapa',function(){
    return view('pages.skapa',['title'=>'Skapa förfrågan']);
})->name('skapa');


//login user
Route::post('/ulogin',[App\Http\Controllers\Auth\LoginController::class, 'customLogin'])->name('user_login');

/*
==================
Grouped routes for both authenticated users and unauthenticated users
===================
*/

//grouping all routes under the dashboard/admin namespace for authenticated users
Route::middleware(['auth','verified'])->prefix('marketplace/clients')->group(function(){

    Route::get('/',function(){
        return 'Welcome';
    })->name('marketplace.clients');

});

//group of routes for superadmin only
Route::middleware(['auth','verified','superadmin'])->prefix('sadmin')->group(function(){

Route::get('/')->name('sadmin_index');

});

//Group of routes for suppliers in the marketplace
Route::middleware(['auth','verified','suppliers'])->prefix('marketplace/suppliers')->group(function(){
Route::get('/',function(){
    return 'Welcome';
})->name('suppliers.dashboard');
});

//all authentication routes here
Auth::routes(['verify'=>true]);

//for email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


//link for verifying new users
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


//for users who forgot their verification link
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');




//Logout route
Route::get('/logout',function(){
    //log user out
    Auth::logout();
    return redirect()->route('login')->with(['message'=>'You have been successfully logged out!']);
})->name('auth.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
