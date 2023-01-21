<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

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


//staging area for suppliers who just got their interest registered
Route::get('suppliers-staging',function(){
    return view('marketplace.suppliers.staging',['title'=>'Thank you for your interest in Toppoffertse']);
})->name('marketplace_suppliers_staging');


//integritetspolicy page
Route::get('integritetspolicy',function(){

return view('pages.integritetspolicy',['title'=>'integritets Policy']);

})->name('integritetspolicy');

//authentication routes
//Authentication and authorization interfaces route
Auth::routes(['verify'=>true]);

//for contact-oss page
Route::get('/kontact-os',function(){
    return view('pages.kontactos',['title'=>'Kontakta Oss']);
})->name('kontactos-pg');

Route::get('skapa',function(){
    return view('pages.skapa',['title'=>'Skapa förfrågan']);
})->name('skapa');

//taking new buyers' requests
Route::post('skapa_request','\App\Http\Controllers\ServiceRequests@newrequest')->name('skapa_request');

//this route redirects user to their respective dashboard if properly logged in previously
Route::get('redirecting',function(){

if(\Auth::check()){ 

//check if user is a client
if(\Auth::user()->user_cat=='CLIENT'){

    return redirect()->route('marketplace.clients');

}else if(\Auth::user()->user_cat=='SADMIN'){

return redirect()->route('sadmin_index');

}else if(\Auth::user()->user_cat=='SUPPLIER'){

    return redirect()->route("suppliers.dashboard");

}
}

})->name('redirect_to_dashboard')->middleware(['auth']);


//login user
Route::post('/ulogin',[App\Http\Controllers\Auth\LoginController::class, 'customLogin'])->name('user_login');

//suppliers indicates their interest
Route::post('anslutditt-foretag','App\Http\Controllers\SuppliersController@storer')->name('suppliers_register');

Route::get('customer-care',function(){
 $dt = \Carbon\Carbon::now();

$dayOfWeek = explode(',',$dt->toDayDateTimeString())[0];

 return view('pages.customer_care',['title'=>'Kundservice','dayOfWeek'=>$dayOfWeek]);
})->name('customer_care');

Route::get('faq',function(){

    return view('pages.faqs',['title'=>'Vanliga frågor och svar']);

})->name('faqs');
/*
==================
Grouped routes for both authenticated users and unauthenticated users
===================
*/

//grouping all routes under the dashboard/admin namespace for authenticated users
Route::middleware(['auth','verified'])->prefix('marketplace/clients')->group(function(){

    //consumers' home page
    Route::get('/',[App\Http\Controllers\ServiceRequestsController::class,'index'])->name('marketplace.clients');

    //for getting all the buyers' request feeds
    Route::get('feeds',function(){
        return view('marketplace.clients.feeds');
    })->name('feeds');


    //for pulling up al that is relative to every service_requests
    Route::get('/enquiries/{hash}','\App\Http\Controllers\ServiceRequestsController@enquiries_suppliers')->name('suppliers.offerta_pages');

});

//for the winner of the request

Route::get('projekt-winner',function(){

return view('pages.projekt_winnr',['title'=>'Ange Vinnare - '.config('app.name')]);

})->name('projekt_winnr');
//group of routes for superadmin only
Route::middleware(['auth','verified','superadmin'])->prefix('sadmin')->group(function(){

Route::get('/')->name('sadmin_index');

});

//Group of routes for suppliers in the marketplace
Route::middleware(['auth','verified','suppliers'])->prefix('marketplace/suppliers')->group(function(){

//suppliers' homepage
    Route::get('/inbox',function(){
        $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
        $catCount = sizeof(\App\Models\Categories::all());
    
    return view('marketplace.suppliers.index',[
    'title'=>'Marknadsplatsen - '.config('app.name'),
    'supplierObj'=>new \App\Models\Suppliers,'requests'=>$requests,
    'request_count'=>sizeof($requests),'category_count'=>$catCount]);
})->name('suppliers.dashboard');

//suppliers settings snapshot page this displays ratings, starsm company name and registration date
Route::get('/projects',function(){

    return view('marketplace.suppliers.projekts',['title'=>'Projekts']);

})->name('suppliers.project');



//for settings display for suppliers
Route::get('/settings',function(){

    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $catCount = sizeof(\App\Models\Categories::all());
    $ratingObj = new \App\Models\Ratings;

    $ratings = \App\Models\Ratings::where('provider_id',\Auth::user()->id)->first();

    return view('marketplace.suppliers.dashboard',['title'=>'Överblick',
    'supplierObj'=>new \App\Models\Suppliers,'requests'=>$requests,'ratings'=>$ratings->rating,
    'review_count'=>$ratings->review_count,
    'request_count'=>sizeof($requests)]);

})->name('suppliers_dashboard');

//for account settings
Route::get('/settings/account',function(){
    return view('marketplace.suppliers.account',['title'=>'Kontaktinformation (visas ej för kund)']);
})->name('settings.account');


//for supplier's contact information
Route::get('contact-information',function(){

})->name('contact-information');


//for supplier's contact information
Route::get('/sales',function(){

})->name('supplier_sales');


//for finished projects that ends up in sales
Route::get('/recent-messages',function(){})->name('recent_messages');

//for account summary of all requests, those responded to and those requesteds for which the buyer chose this arrtisan
Route::get('/settings/accountsummary',function(){

})->name('accountsummary');



//for resetting supplier's password from the dashboard
Route::get('/settings/password',function(){})->name('settings.password');

//for account summary of all requests, those responded to and those requesteds for which the buyer chose this arrtisan
Route::get('/settings/accountsummary',function(){

})->name('accountsummary');

//for generating invoices/paying invoices generated by the site administrators
Route::get('/settings/invoices',function(){})->name('settings.invoices');


//for supplier's profile
Route::get('/settings/profile',function(){})->name('settings.profile');


//for setting watches
Route::get('/settings/watch',function(){})->name('settings.watch');


});


//for stamps
Route::get('/settings/stamps',function(){

})->name('settings.stamps');


//for settings request labels
Route::get('/settings/labels',function(){

})->name('settings.labels');


//for canned responses
Route::get('/cannedresponses')->name('cannedresponses');
//all authentication routes here


//for supplier chat notifications and request responses
Route::get('/settings/notifications',function(){


})->name('settings.notifications');


//for cookies settings
Route::get('/settings/cookie',function(){

})->name('settings.cookie');


//authentication routes
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


Route::get('/home', function(){
    return redirect()->route('redirect_to_dashboard');
})->name('home');
