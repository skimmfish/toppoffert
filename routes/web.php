<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


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


//for registering new suppliers
Route::post('/register-supplier','\App\Http\Controllers\UserController@savesupplier')->name('register_supplier');

//for saving buyer_Types
Route::post('/save-buyer-type/{id}','\App\Http\Controllers\CategoriesController@savebuyertype')->name('save_buyer_type');


Route::put('/save-assignment-size/{id}','\App\Http\Controllers\CategoriesController@saveassignmentsize')->name('save_assignment_size');

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

//for faqs page
Route::get('faq',function(){

    return view('pages.faqs',['title'=>'Vanliga frågor och svar']);

})->name('faqs');
/*
==================
Grouped routes for both authenticated users and unauthenticated users
===================
*/

//grouping all routes under the dashboard/admin namespace for authenticated users
Route::middleware(['auth','sadmin'])->prefix('marketplace/sa')->group(function(){

//super administrator's home
Route::get('/',function(){

$newSuppliers = 0;
$no_of_clients = 0;
$no_of_requests = 0;
$no_of_sales_to_date = 0;

$new_suppliers = \App\Models\Suppliers::where(['date_registered'=>date('Y-m-d')])->get();

return view('marketplace.sadmin.index',['title'=>"Administrator's Portal - ".config('app.name'), 'unreadMessageCounter'=>0,
'new_suppliers'=>$newSuppliers,
'no_of_clients'=>$no_of_clients,
'no_of_requests'=>$no_of_requests,
'no_of_sales_to_date'=>$no_of_sales_to_date,
'new_suppliers_list'=>$new_suppliers
]);

})->name('sadmin_index');

//switch to maintenance
Route::get('/switch-to-maintenance',function(){

\Artisan::call('down --secret=toppoffert');

return redirect()->route('sadmin_index')->with(['message'=>'Portalen bytte till underhåll']);

})->name('switch_to_maintenance');


//approve supplier
Route::get('approve-supplier/{supplier_id}','\App\Http\Controllers\UserController@approvesupplier')->name('approve_supplier');

//Route for sending document to suppliers
Route::get('/send-agreement-documents','\App\Http\Controllers\DocumentController@senddocuments')->name('send_agreement_documents');

//send offer invoice
Route::get('/send-offer-invoice/{sid}',function($sid){

    return view('marketplace.sadmin.invoicegenerator',['sid'=>$sid,'title'=>'Skicka erbjudandenoteringar och faktura']);

})->name('send_offer_invoice');


//generate invoices
Route::get('/invoices',function(){

})->name('sadmin.invoices');

//see all invoices
Route::get('/all-invoice',function(){})->name('sadmin_all_invoices');

//generate new invoice, this page open up all the users on the suppliers' list to pick the right suppleir to issue the invoice to
Route::get('/new-invoice')->name('sadmin.new_invoice');

//deletion confirmation
Route::get('confirm-resource-action/{action_type}/{id}/{resource}',function(){})->name('sadmin_confirm_resources');

//all sales made between buyers and suppliers
Route::get('all-sales',[App\Http\Controllers\ServiceRequestsController::class,'get_all_sales'])->name('sadmin_all_sales');

//approving service buyer requests
Route::get('/approve-request/{request_id}',[App\Http\Controllers\ServiceRequestsController::class,'approve_request'])->name('sadmin_approve_request');

//delete an invoice
Route::delete('delete-invoice/{id}')->name('sadmin.delete_invoice');

//getting all buyers request for assignments and approvals
Route::get('/all-buyer-requests',[App\Http\Controllers\ServiceRequestsController::class,'allbuyersrequest'])->name('sadmin_all_requests');


//for managing credit assignment
Route::get('/credit-management',[App\Http\Controllers\CreditsController::class,'credit_portal'])->name('sadmin_credit_mgt');


//assign credit view
Route::get('/assign-credit-view/{supplier_id}/{img}/{f_name}/{email}/{l_name}',function($supplier_id,$img,$f_name,$email,$l_name){
    
    return view('marketplace.sadmin.assigncreditview',['l_name'=>$l_name,'supplier_id'=>$supplier_id,'img'=>$img,
    'f_name'=>$f_name,'email'=>$email,'supObj'=>new \App\Http\Controllers\SuppliersController]);

})->name('assign_credit');

//assign_credit_action route
Route::put('/assign-credit/{id}',[\App\Http\Controllers\CreditsController::class,'assign_credit'])->name('assign_credit_to_supplier');

//send an email to
Route::get('mail-to/{email}',function($mail){

})->name('mail_to_supplier');



//for logs
Route::get('/administrative-log/{type}',[App\Http\Controllers\LoggerController::class,'getlog'])->name('sadmin.log');


//all users with a type argument
Route::get('/all-users/{type}',[App\Http\Controllers\UserController::class,'sa_all_users'])->name('sa_all_users');

//site configuration
Route::get('site-configuration')->name('site_configuration');
});

//grouping all routes under the dashboard/admin namespace for authenticated users
Route::middleware(['auth','verified'])->prefix('marketplace/clients')->group(function(){


    Route::put('modify-password/{id}','\App\Http\Controllers\UserController@modifyPasswordFromDashboard')->name('modifypass');

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

//=======================================
//SADMIN ROUTES
//=======================================
//group of routes for superadmin only
Route::middleware(['auth','verified','sadmin'])->prefix('sadmin')->group(function(){

//HOMEPAGE
Route::get('/',function(){

$active_user = \App\Models\User::whereNull('deleted_at')->orderBy('created_at','DESC')->take(5)->get();
$messages = \App\Models\NotificationModel::where('receiver_id',\Auth::user()->id)->orderBy('created_at','DESC')->get();
return view('marketplace.sadmin.index',['title'=>'Administrators Portal',
'active_user'=>$active_user,'personalNotification'=>$messages]);

})->name('sadmin_index');


//configuration panel
Route::get('/settings-and-configuration',function(){

    return view('marketplace.sadmin.settings_config',['title'=>'Settings & Configurations']);

})->name('marketplace.sadmin.settings');


//switch to maintenance
Route::get('/switch-to-maintenance',function(){

    \Artisan::call('down --secret=toppoffert');

    return redirect()->route('sadmin_index')->with(['message'=>'Site switched to maintenance']);

})->name('switch_to_maintenance');


//see a user's profile
Route::get('/see-user-profile/{id}',function($id){

    $profile = \App\Models\User::where('id',$id)->first();

    return view('marketplace.sadmin.viewprofile',['id'=>$id,'profile'=>$profile,'supObj'=>new \App\Http\Controllers\SuppliersController]);

})->name('seeuserprofile');


//this route shows a popup for sending an email to the user with a redirect to the notifications portal after sending
Route::get('reply_to_msg/{email}',function($email){

return view('marketplace.pages.reply_client',['email'=>$email]);
})->name('reply_to_msg');

//Delete user
Route::get('/delete-user-confirmation/$id',function($id){
    return view('pages.deleteuserconfirmation',['id'=>$id]);
})->name('delete_user_confirmation');


//Delete notificatioin confirmation
Route::get('/delete-msg/$id/{type}',function($id,$type){
    return view('pages.deleteuserconfirmation',['id'=>$id,'type'=>$type]);
})->name('delete_msg_confirmation');

//delete the msg using softdelete model
Route::get('/delete-msg/{id}/{type}',[\App\Http\Controllers\UserController::class, 'delete_msg'])->name('delete_user');


//delete the user using softdelete model
Route::get('/delete-user/{id}',[\App\Http\Controllers\UserController::class, 'delete_user'])->name('delete_user');


//send a message to the user
Route::get('/send-message/{id}/{email}/{subject}',function($id,$email,$subject){

return view('pages.send_a_message',['email'=>$email,'id'=>$id,'subject'=>$subject]);

})->name('send_message');


//send notification 
Route::post('/send-notification',[\App\Http\Controllers\NotificationsController::class,'sendnotification'])->name('sendmsg_reply');

//create invoices
Route::get('/create-invoice',function(){})->name('sadmin.create_invoice');
});


//all messages
Route::get('/recent-messages',function(){

    return view('marketplace.sadmin.messages',[

    ]);
    
})->name('marketplace.sadmin.recent_message')->middleware(['auth']);


    //View Message
Route::get('/view-message/{id}',function(){

return view('marketplace.view_msg',[]);

})->name('marketplace.sadmin.view_recent_message')->middleware(['auth']);



//===================================================
//For suppliers only
//===================================================
//Group of routes for suppliers in the marketplace
Route::middleware(['auth','verified','suppliers'])->prefix('marketplace/suppliers')->group(function(){

//suppliers' homepage
    Route::get('/inbox',function(){

        $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
        $catCount = sizeof(\App\Models\Categories::all());
        $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

    return view('marketplace.suppliers.index',[
    'title'=>'Marknadsplatsen - '.config('app.name'),
    'supplierObj'=>new \App\Models\Suppliers,'requests'=>$requests,
    'request_count'=>sizeof($requests),'category_count'=>$catCount,'credit'=>$credits]);

})->name('suppliers.dashboard');


//for submitting suppliers' category
Route::put('/save-categories/{id}','\App\Http\Controllers\CategoriesController@updatesuppliercategorizaton')->name('fix_supplier_category');

//supplier's coverage
Route::get('/suppliers-coverage',function(){
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
    $cats = \App\Models\Categories::all();
    $catCount = sizeof($cats);
    $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

    return view('marketplace.suppliers.coverage',['title'=>'Bevakning','requests'=>$requests,
    'request_count'=>sizeof($requests),'category_count'=>$catCount,'credit'=>$credits,
    'categories'=>$cats]);

})->name('settings.coverage');


//view request modal view
Route::get('/view-service-request/{hash}',[\App\Http\Controllers\ServiceRequestsController::class,'viewservicerequest'])->name('supplier_view_request');

//delete a request from your view
Route::get('clear-request/{id}')->name('request_clear');

//showing interest by clicking the pink button
Route::get('/show-interest/{hash}',function(){

})->name('show_interest');

//customer care_for suppliers page
Route::get('/services/customer-care',function(){
$dt = \Carbon\Carbon::now();   
$dayOfWeek = explode(',',$dt->toDayDateTimeString())[0];

$requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
$catCount = sizeof(\App\Models\Categories::all());
$credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

return view('marketplace.suppliers.customer_care',[
'title'=>'Kundservice',
'dayOfWeek'=>$dayOfWeek,
'requests'=>$requests,
'request_count'=>sizeof($requests),
'category_count'=>$catCount,
'credit'=>$credits]);

})->name('supplier_customer_care');
   

//suppliers settings snapshot page this displays ratings, starsm company name and registration date
Route::get('/projects',function(){
    $uid=auth()->id();
    $credits= \App\Http\Controllers\CreditsController::getCredits($uid)->credits;
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $catCount = sizeof(\App\Models\Categories::all());
    $projects = \App\Models\ServiceRequests::where(['matched'=>1,'publish_status'=>true,'project_execution_status'=>2])->get();

    return view('marketplace.suppliers.projekts',[
        'title'=>'Projekts',
        'request_count'=>sizeof($requests),
        'credit'=>$credits,
        'category_count'=>$catCount,
        'projects'=>$projects
    ]);

})->name('suppliers.project');

//for settings display for suppliers
Route::get('/settings',function(){

    $uid = \Auth::user()->id;
    $credits= \App\Http\Controllers\CreditsController::getCredits($uid)->credits;
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $catCount = sizeof(\App\Models\Categories::all());
    $ratingObj = new \App\Models\Ratings;
  
    $ratings = \App\Models\Ratings::where('provider_id',$uid)->first();
    $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials($uid);

    return view('marketplace.suppliers.dashboard',['title'=>'Överblick',
    'supplierObj'=>new \App\Models\Suppliers,'requests'=>$requests,'ratings'=>$ratings->rating,
    'testimonials'=>$testimonials,
    'review_count'=>$ratings->review_count, 'request_count'=>sizeof($requests),'credit'=>$credits]);

})->name('suppliers_dashboard');

//for account settings
Route::get('/settings/account',function(){
    return view('marketplace.suppliers.account',['title'=>'Kontaktinformation (visas ej för kund)']);
})->name('settings.account');


//for supplier's contact information
Route::get('contact-information',function(){

    $uid = \Auth::user()->id;
    $credits= \App\Http\Controllers\CreditsController::getCredits($uid)->credits;
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $catCount = sizeof(\App\Models\Categories::all());
    $ratingObj = new \App\Models\Ratings;
  
    $ratings = \App\Models\Ratings::where('provider_id',$uid)->first();
    $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials($uid);

    return view('marketplace.suppliers.kontactinformation',['title'=>'Kontaktuppgifter',
    'review_count'=>$ratings->review_count, 'request_count'=>sizeof($requests),'credit'=>$credits]);

})->name('contact-information');


//for supplier's contact information
Route::get('/sales',[App\Http\Controllers\ServiceRequestsController::class,'mysales'])->name('supplier_sales');


//for finished projects that ends up in sales
Route::get('/recent-messages',function(){})->name('recent_messages');

//for account summary of all requests, those responded to and those requesteds for which the buyer chose this arrtisan
Route::get('/settings/accountsummary',function(){

})->name('accountsummary');



//for resetting supplier's password from the dashboard
Route::get('/settings/password',function(){
    
  $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials(\Auth::user()->id);  
  $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
  $catCount = sizeof(\App\Models\Categories::all());
  $ratingObj = new \App\Models\Ratings;
  $ratings = \App\Models\Ratings::where('provider_id',\Auth::user()->id)->first();
  $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

    return view('marketplace.suppliers.password',['title'=>'Byt lösenord',
    'ratings'=>$ratings->rating,
    'review_count'=>$ratings->review_count, 'request_count'=>sizeof($requests),
    'credit'=>$credits,
    ]);


})->name('settings.password');

//for account summary of all requests, those responded to and those requesteds for which the buyer chose this arrtisan
Route::get('/settings/accountsummary',function(){
})->name('accountsummary');

//for generating invoices/paying invoices generated by the site administrators
Route::get('/settings/invoices',function(){
    $uid = \Auth::user()->id;
    
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $catCount = sizeof(\App\Models\Categories::all());
    $ratingObj = new \App\Models\Ratings;
    $ratings = \App\Models\Ratings::where('provider_id',$uid)->first();
    $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;
    $invoices = \App\Http\Controllers\InvoicesController::getall($uid);
    
    return view('marketplace.suppliers.invoices',['title'=>'Fakturor Och','ratings'=>$ratings->rating,
    'review_count'=>$ratings->review_count, 'request_count'=>sizeof($requests),
    'credit'=>$credits,'invoices'=>$invoices
    ]);

})->name('settings.invoices');


//for ratings
Route::get('/settings/ratings',function(){

  $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials(\Auth::user()->id);  
  $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
  $catCount = sizeof(\App\Models\Categories::all());
  $ratingObj = new \App\Models\Ratings;

  $ratings = \App\Models\Ratings::where('provider_id',\Auth::user()->id)->first();

  $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

    return view('marketplace.suppliers.ratings',['title'=>'Omdömen ',
    'ratings'=>$ratings->rating,
    'review_count'=>$ratings->review_count, 'request_count'=>sizeof($requests),
    'credit'=>$credits,
    'testimonials'=>$testimonials]);

})->name('settings.ratings');



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
 
    return back()->with('message', 'Verifieringslänk har skickats!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//Logout route
Route::get('/logout',function(){
    //log user out
    Auth::logout();
    return redirect()->route('login')->with(['message'=>'Du har loggats ut']);
})->name('auth.logout');


Route::get('/home', function(){
    return redirect()->route('redirect_to_dashboard');
})->name('home');



//for profile pages for all users
Route::get('/user-profile',[App\Http\Controllers\UserController::class,'profile'])->name('pages.profile')->middleware(['auth','verified']);