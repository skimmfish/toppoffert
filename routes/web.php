<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Events\Message;



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
    $cats = \App\Models\Categories::all();
    return view('index')->with(['title'=>'Vi hjälper dig hitta rätt tjänsteföretag','categories'=>$cats]);
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


//for clients sending in their requests
Route::get('/buyer-request-complete',function(){

    return view('marketplace.clients.staging',['title'=>'Din förfrågan har skickats till 100-tals företag']);

})->name('clients_staging_area');

//route to docstart
Route::get('/su/offerter/{hash}',function($hash){
    return view('pages.docstart',['title'=>'Se affärsavtalsdokument','docHash'=>$hash,config('app.name').'Affärsavtalsdokumentstartare']);
})->name('docstart');


//send business docs
Route::get('/doc-offerter/see-business-docs/{hash}','\App\Http\Controllers\SuppliersController@getSupplierInfoForDocs')->name('see_agreement_documents');

//Thanks for accepting offers
Route::get('/su/tack-for-din',function(){

    $info = 'Tack för att du accepterar'.config('app.name').' offert, vi uppskattar att du kommer och vi är villiga att se till att du får en fantastisk upplevelse på vår plattform!';

    return view('marketplace.suppliers.view_confirmation_details')->with(['title'=>'Tack för din beställning','info'=>$info]);

})->name('marketplace.suppliers.view_confirmation_details');

//accept offer
Route::put('/accept-offer/{hash}','\App\Http\Controllers\SuppliersController@acceptoffer')->name('accept_offert');

//send message to abbeh
Route::get('/send-message-to-abbeh/{email}',function($email){
    return view('pages.sendmsgtoabbeh',['email'=>\App\Http\Controllers\ConfigController::get_value('business_email')]);
})->name('send_message_to_abbeh');


//send message to Abbeh
Route::post('sendmsg',function(Request $request){
    $email = $request->email__to;
    $msg = $request->msgto_send;
    $contactPerson = \App\Http\Controllers\ConfigController::get_value('contact_person');
    
    \Mail::to($email)->queue(new \App\Mail\SendMessage($msg,$contactPerson));

return redirect()->back()->with(['message'=>'Your email has been sent to Abbeh']);
})->name('sendmsg');

//for contact-oss page
Route::get('/kontact-os',function(){
    return view('pages.kontactos',['title'=>'Kontakta Oss']);
})->name('kontactos-pg');


//for powering sendmsg to customer care via the contactus page
Route::post('sendmsg',function(Request $request){
    $email = \App\Http\Controllers\ConfigController::get_value('business_email');
    $msg = $request->msgto_send;
    $phone_no = $request->telefon;
    $senderEmail = $request->return_email;
    $contactPerson = \App\Http\Controllers\ConfigController::get_value('contact_person');

    try{
    \Mail::to($email)->queue(new \App\Mail\SendCustomerEnquiry($msg,$contactPerson,$senderEmail,$phone_no));
    }catch(\Exception $e){

        $e->getMessage();
        return redirect()->back()->with(['error'=>'Det finns ett fel i din begäran']);

    }
    return redirect()->back()->with(['message'=>'Ditt meddelande har skickats till kundtjänsten']);

})->name('sendmsg_to_cs');


//for request sybmission by customers interest
Route::get('skapa',function(){
    return view('pages.skapa',['title'=>'Skapa förfrågan','categories'=>\App\Http\Controllers\CategoriesController::getcatnames()]);
})->name('skapa');


Route::get('/skapa/{cat}/{subcat}',function($cat,$subcat){

return view('pages.skapa',['title'=>'Skapa förfrågan','catSelected'=>$cat,'subCatSelected'=>$subcat,'categories'=>\App\Http\Controllers\CategoriesController::getcatnames()]);

})->name('skapa_with_cat');


//taking new buyers' requests
Route::post('/skapa-request-processor','\App\Http\Controllers\ServiceRequestsController@store')->name('skapa_request');

//this route redirects user to their respective dashboard if properly logged in previously
Route::get('redirecting',function(){

if(\Auth::check()){ 

//check if user is a client
if(\Auth::user()->user_cat=='CLIENT'){

    return redirect()->route('marketplace.clients.active_requests');

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
Route::get('/faq',function(){

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

$allrequests = \App\Models\ServiceRequests::whereNull('deleted_at')->orderBy('created_at','DESC')->orderBy('publish_status','DESC')->paginate(15);

return view('marketplace.sadmin.buyer_requests',[
'allrequest'=>$allrequests,
'title'=>"Administrator's Portal - ".config('app.name'), 'unreadMessageCounter'=>0,
'new_suppliers'=>$newSuppliers,
'no_of_clients'=>$no_of_clients,
'no_of_requests'=>$no_of_requests,
'no_of_sales_to_date'=>$no_of_sales_to_date,
'new_suppliers_list'=>$new_suppliers
]);

})->name('sadmin_index');


//creating a new supplier
Route::get('/new-supplier',function(){

return view('marketplace.sadmin.new_supplier',['title'=>'Skapar ny leverantör']);

})->name('new_user');

//for creating new suppliers
Route::post('/register-new-supplier',[\App\Http\Controllers\UserController::class,'createsupplier'])->name('create_supplier');


//view request modal view
Route::get('/sa-request-preview/{hash}',[\App\Http\Controllers\ServiceRequestsController::class,'viewservicerequest'])->name('sa_preview_request')->middleware(['sadmin']);

//view request modal view
Route::get('/preview-request/{hash}',[\App\Http\Controllers\ServiceRequestsController::class,'previewRequest'])->name('sa_preview_request_sa')->middleware(['sadmin']);


//switch to maintenance
Route::get('/switch-to-maintenance',function(){

\Artisan::call('down --secret=toppoffert');

return redirect()->route('sadmin_index')->with(['message'=>'Portalen bytte till underhåll']);

})->name('switch_to_maintenance');


//approve supplier
Route::get('approve-supplier/{supplier_id}','\App\Http\Controllers\UserController@approvesupplier')->name('approve_supplier');

//send business docs
Route::get('/confirm-sending-docs/{username}',function($username){

    return view('pages.confirm_sending_docs',['usr'=>$username]);

})->name('confirm-sending_docs');


//this route generates a url and send it to the user via the email, this is the route you are redirected to aftr clicking
//confirm-sending_docs named route
    Route::get('/send-docs/{usr}',function($usr){

        $supob = new \App\Http\Controllers\SuppliersController;

        $user = \App\Models\User::where('username',$usr)->first();
        $f_name = $user->f_name;
        $uid = $user->id;

        $supob->senddocs($usr);

    return redirect()->route('sa_all_users',['type'=>'supplier'])->with([
    'message'=>'Affärsdokument har skickats till leverantören framgångsrikt!']);

})->name('sendbusinessdocs');



//business doc viewing
Route::get('/offerter-business-doc/{hash}',function($hash){

    return view('marketplace.suppliers.view_docs_details',['title'=>'Affärsdokument och avtalsundertecknare','hash'=>$hash]);

})->name('view_docs_details');

//Route for sending document to suppliers
Route::get('/send-invoice-supplier/{uid}',function($uid){
$supp=new \App\Http\Controllers\SuppliersController;
//get users' details and show them in a popup
$user = \App\Models\User::where('id',$uid)->first();
$first_name = $user->f_name;
$last_name = $user->l_name;
$email = $user->email;
$company_name = $supp->get_supplier_data('supplier_corp_name',$uid);
$OrganzNumber = $supp->get_supplier_data('org_reg_number',$uid);

$address = $user->address.' '.$user->zip_code.', '.$user->province;

return view('pages.supplier_info',['org_reg_no'=>$OrganzNumber,
'email'=>$email,
'contactPerson'=>$first_name.' '.$last_name,'postalCode'=>$user->pobox,
'company_name'=>$company_name,'address'=>$address,
'city'=>$user->city,
'Number'=>$user->phone_no,
]);
})->name('send_fakturor');




//generate invoices
Route::get('/invoices',function(){

})->name('sadmin.invoices');

//see all invoices
Route::get('/all-invoice',function(){})->name('sadmin_all_invoices');

//generate new invoice, this page open up all the users on the suppliers' list to pick the right suppleir to issue the invoice to
Route::get('/new-invoice')->name('sadmin.new_invoice');

//deletion confirmation
Route::get('confirm-resource-action/{action_type}/{id}/{resource}',function($action_type,$id,$resource){

return view('pages.confirm_resource_action',['action_type'=>$action_type,'id'=>$id,'resource'=>$resource]);

})->name('sadmin_confirm_resources');


//this is generic deletion script
Route::get('/delete-resource/{type}/{resource}/{id}','\App\Http\Controllers\ServiceRequestsController@deleteResources')->name('delete_resource');

//all sales made between buyers and suppliers
Route::get('all-sales',[App\Http\Controllers\ServiceRequestsController::class,'get_all_sales'])->name('sadmin_all_sales');

//approving service buyer requests
Route::get('/approve-request/{request_id}/{buyer_id}',[App\Http\Controllers\ServiceRequestsController::class,'approve_request'])->name('sadmin_approve_request');

//delete an invoice
Route::delete('delete-invoice/{id}')->name('sadmin.delete_invoice');

//getting all buyers request for assignments and approvals
Route::get('/all-buyer-requests',[App\Http\Controllers\ServiceRequestsController::class,'allbuyersrequest'])->name('sadmin_all_requests');


//for managing credit assignment
Route::get('/credit-management',[App\Http\Controllers\CreditsController::class,'credit_portal'])->name('sadmin_credit_mgt');


//assign credit view
Route::get('/assign-credit-view/{supplier_id}/',function($supplier_id){
    $f_name = \App\Models\User::find($supplier_id)->f_name;
    $l_name = \App\Models\User::find($supplier_id)->l_name;
    $img = \App\Models\User::find($supplier_id)->profile_img;
    $email = \App\Models\User::find($supplier_id)->email;
    
    return view('marketplace.sadmin.assigncreditview',[
        'l_name'=>$l_name,'supplier_id'=>$supplier_id,
        'img'=>$img,'f_name'=>$f_name,'email'=>$email,'supObj'=>new \App\Http\Controllers\SuppliersController]);

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

//fetch categories
Route::get('/get-cat-names',function(){
    if(isset($_GET['cat_name'])){
        
        $cat_name = $_GET['cat_name'];

    \App\Http\Controllers\CategoriesController::getsubcatnames($cat_name); 
}
}
//'\App\Http\Controllers\CategoriesController@getsubcatnames')
)->name('categories');


//fetch categories
Route::get('/get-cat-names-for-page',function(){
    if(isset($_GET['cat_name'])){
        
        $cat_name = $_GET['cat_name'];

    \App\Http\Controllers\CategoriesController::getsubcatnamesforpg($cat_name); 
}
}
)->name('categories_for_page');


//grouping all routes under the dashboard/admin namespace for authenticated users
Route::middleware(['auth','verified'])->prefix('marketplace/clients')->group(function(){


//for enquiries overview of all who showed interest

Route::get('/enquiries/{request_hash}','\App\Http\Controllers\ServiceRequestsController@viewresponders')->name('single_enquiry_view');
//for searching service areas
Route::get('/auto-search-cat',[App\Http\Controllers\ServiceRequestsController::class,'searchservicecat'])->name('searchservicecat');

    Route::put('modify-password/{id}','\App\Http\Controllers\UserController@modifyPasswordFromDashboard')->name('modifypass');

    //consumers' home page
    Route::get('/',[App\Http\Controllers\ServiceRequestsController::class,'index'])->name('marketplace.clients');

    //for active requests
    Route::get('/active-requests',[App\Http\Controllers\ServiceRequestsController::class,'active_requets'])->name('marketplace.clients.active_requests');


        //for archived requests
        Route::get('/archived-requests',[App\Http\Controllers\ServiceRequestsController::class,'archived_requets'])->name('marketplace.clients.archived_requests');

        //for archived requests
        Route::get('/unapproved-requests',[App\Http\Controllers\ServiceRequestsController::class,'unapproved_request'])->name('marketplace.clients.unapproved_requests');

        //for getting all the buyers' request feeds
    Route::get('feeds',function(){
        return view('marketplace.clients.feeds');
    })->name('feeds');


    //for pulling up al that is relative to every service_requests
    Route::get('/enquiries/{hash}','\App\Http\Controllers\ServiceRequestsController@enquiries_suppliers')->name('suppliers.offerta_pages');



//for chatting with a supplier
Route::get('/request-box/{request_id}/{request_hash}/{supplier_id}','\App\Http\Controllers\ServiceRequestsController@chatbox')->name('chat_with_supplier');

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
return view('marketplace.sadmin.index',['title'=>'Administratörens Instrumentpanel',
'active_user'=>$active_user,'personalNotification'=>$messages]);

})->name('sadmin_index');


Route::get('/confirm-request-approval/{request_id}/{buyer_id}',function($request_id,$buyer_id){

return view('pages.confirm_request_approval',['request_id'=>$request_id,'buyer_id'=>$buyer_id]);

})->name('sadmin_approve_request_confirm');

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
Route::get('/delete-user-confirmation/{id}',function($id){
    return view('pages.deleteuserconfirmation',['id'=>$id]);
})->name('delete_user_confirmation');


//Delete notificatioin confirmation
Route::get('/delete-msg/$id/{type}',function($id,$type){
    return view('pages.deleteuserconfirmation',['id'=>$id,'type'=>$type]);
})->name('delete_msg_confirmation');

//delete the msg using softdelete model
Route::get('/delete-msg/{id}/{type}',[\App\Http\Controllers\UserController::class, 'delete_msg'])->name('delete_msg');


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
        $uid = \Auth::user()->id;

        $requests = \App\Models\ServiceRequests::where([
        'matched'=>0,
        'publish_status'=>true,
        'archival_status'=>false,
        ])->get();

        //initializing the credits
        $credits = 0;

        $catCount = sizeof(\App\Models\Categories::all());
        
        $creditObj = \App\Http\Controllers\CreditsController::getCredits($uid);
        if(is_null($creditObj)){
            $credits = 0;
        }else{
        $credits= $creditObj->credits;
        }

        $supplierCoverage = \App\Http\Controllers\SuppliersController::getServiceAreas($uid);

    return view('marketplace.suppliers.index',[
    'title'=>'Marknadsplatsen - '.config('app.name'),
    'supplierObj'=>new \App\Models\Suppliers,'requests'=>$requests,
    'supplierCoverage'=>$supplierCoverage,
    'request_count'=>sizeof($requests),'category_count'=>$catCount,'credit'=>$credits]);

})->name('suppliers.dashboard');


//for searching for services
Route::get('/inbox/searchserrequests','\App\Http\Controllers\ServiceRequestsController@searchservices')->name('suppliers.search_filters');

//saving certification doc
Route::put('/save-certification-doc/{uid}','\App\Http\Controllers\SuppliersController@uploadcertification')->name('upload_certification');

//for submitting suppliers' category
Route::put('/save-categories/{id}','\App\Http\Controllers\CategoriesController@updatesuppliercategorizaton')->name('fix_supplier_category');

//supplier's coverage
Route::get('/suppliers-coverage',function(){

    $uid = \Auth::user()->id;
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
    $cats = \App\Models\Categories::all();
    $catCount = sizeof($cats);

    $credits = 0;

    $catCount = sizeof(\App\Models\Categories::all());
    
    $creditObj = \App\Http\Controllers\CreditsController::getCredits($uid);

    if(is_null($creditObj)){
        $credits = 0;
    }else{
    $credits= $creditObj->credits;
    }

    $buyersType = \DB::table('buyers_type')->get();
    return view('marketplace.suppliers.coverage',['title'=>'Bevakning','requests'=>$requests,
    'request_count'=>sizeof($requests),'category_count'=>$catCount,'credit'=>$credits,
    'categories'=>$cats,'buyers_type'=>$buyersType]);

})->name('settings.coverage');


//view request modal view
Route::get('/view-service-request/{hash}',[\App\Http\Controllers\ServiceRequestsController::class,'viewservicerequest'])->name('supplier_view_request');

//delete a request from your view
Route::get('clear-request/{id}')->name('request_clear');

//showing interest by clicking the pink button
Route::get('/show-interest/{hash}',function(){

})->name('show_interest');


//send bid message to buyers via popup modal
Route::get('/send-message-buyer/{id}/{supplier_id}/{buyer_id}',function($id,$supplier_id,$buyer_id){

    $title = \App\Models\ServiceRequests::where('id',$id)->first()->request_title;
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'archival_status'=>false])->get();
    $cats = \App\Models\Categories::all();
    $catCount = sizeof($cats);
    $credits = 0.0;
    $credObj = \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id);

    if(!is_null($credObj)){

    $credits = $credObj->credits;
 }else{

  $crObj = new  \App\Models\Credits([

    'credits'=> 0,
    'supplier_id'=>Auth::user()->id,
    'created_at'=>date('Y-m-d h:i:s',time()),
    'updated_at'=>date('Y-m-d h:i:s',time())
  ]);

  $crObj->save();

}


    $isDeducted = \App\Models\Responders::where(['supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id,'request_id'=>$id])->get();

    $messages = \App\Models\RequestChats::where(['request_id'=>$id,'supplier_id'=>$supplier_id])->paginate(20);
    
    $allFiles = \App\Models\FileManager::where(['request_id'=>$id])->first();

    $suppAvatar = \Auth::user()->profile_img; 
    //create an entry in the responder table first

    return view('pages.sendmessagebox',['requests'=>$requests,'buyer_id'=>$buyer_id,
    'messages'=>$messages,'request_title'=>$title,'allfiles'=>$allFiles,
    'request_count'=>sizeof($requests),'category_count'=>$catCount,'avatar'=>$suppAvatar,'credit'=>$credits,'id'=>$id,'supplier_id'=>$supplier_id,'title'=>'Lämna intresse för köparens begäran - '.$title]);

})->name('reach_out_to_buyer_action')->middleware(['creditdeduct']);


//send bid message popup to confirm action
Route::get('/send-message-popup/{id}/{supplier_id}/{buyer_id}',function($id,$supplier_id,$buyer_id){

    return view('pages.confirm_deduction_popup',[
    'id'=>$id,
    'supplier_id'=>$supplier_id,
    'buyer_id'=>$buyer_id]);

})->name('reach_out_to_buyer');



//message board for suppliers

Route::get('/message-board')->name('marketplace.suppliers.message_board');

//for reading single messages
Route::get('/read-inbox/{note_id}',function($note_id){})->name('marketplace.suppliers.messages');

//for viewing invoice
Route::get('/view_invoice/{id}')->name('view_invoice');

//this route is for softdeleting invoices
Route::get('/delete-invoice/{id}',function($id){

    return view("pages.delete_invoice_confirmation",['id'=>$id]);

})->name('delete_invoice');


//this deletes the invoices
Route::get('/delete-invoice-now',function($id){
$res = \DB::delete("DELETE from invoices WHERE id=?",[$id]);
return redirect()->back()->with(['message'=>'Invoice deleted successfully!']);
})->name('delete_invoice_now');


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
    $ratingObj = new \App\Http\Controllers\RatingsController;
  
    $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials($uid);

    $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;
    
    $review_count = $ratingObj->getRatings($uid);


    return view('marketplace.suppliers.dashboard',['title'=>'Överblick',
    'supplierObj'=>new \App\Models\Suppliers,'requests'=>$requests,'ratings'=>$review_count['rating'],
    'testimonials'=>$testimonials,
    'review_count'=>$review_count['review_count'], 'request_count'=>sizeof($requests),'credit'=>$credits]);

})->name('suppliers_dashboard');

//for account settings
Route::get('/settings/account',function(){
    return view('marketplace.suppliers.account',['title'=>'Kontaktinformation (visas ej för kund)']);
})->name('settings.account');


//for supplier's contact information
Route::get('/contact-information',function(){

    $uid = \Auth::user()->id;
    $credits= \App\Http\Controllers\CreditsController::getCredits($uid)->credits;

    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $request_count = 0;
    if(sizeof($requests)<=0){
        $request_count = 0;
    }
    
    $catCount = sizeof(\App\Models\Categories::all());
    $ratingObj = new \App\Http\Controllers\RatingsController;

    $review_count = $ratingObj->getRatings($uid);

    $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials($uid);
    
    $certificate = \App\Models\Suppliers::where(['supplier_id'=>$uid])->first()->certification_uri;
    $coy_reg_cert = \App\Models\Suppliers::where(['supplier_id'=>$uid])->first()->coy_reg_cert;

    return view('marketplace.suppliers.kontactinformation',['title'=>'Kontaktuppgifter',
    'review_count'=>$review_count['review_count'], 'certificate'=>$certificate,'uid'=>$uid,
    'coy_reg_cert'=>$coy_reg_cert,'request_count'=>$request_count,'credit'=>$credits]);


})->name('contact-information');

//upload certification
Route::get('/file-certificate-upload/{id}',function($id){

    return view('pages.file_uploader_view')->with(['s_id'=>$id]);

})->name('file_uploader_view');

//updating kontact info for suppliers
Route::put('save-kontact-info/{id}','\App\Http\Controllers\UserController@updateUser')->name('save_kontact');



//for supplier's contact information
Route::get('/sales',[App\Http\Controllers\ServiceRequestsController::class,'mysales'])->name('supplier_sales');


//for finished projects that ends up in sales
Route::get('/recent-messages',function(){})->name('recent_messages');

//for account summary of all requests, those responded to and those requesteds for which the buyer chose this arrtisan
Route::get('/settings/accountsummary',function(){

    return view('marketplace.suppliers.certifications',[
        'request_count'=>0,
        'title'=>'Kontosammanfattning och certifieringar']);

})->name('accountsummary');



//for resetting supplier's password from the dashboard
Route::get('/settings/password',function(){
    $uid = \Auth::user()->id;
  $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials($uid);  
  $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
  $catCount = sizeof(\App\Models\Categories::all());

  $ratingObj = new \App\Http\Controllers\RatingsController;

  $review_count = $ratingObj->getRatings($uid);

  $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

    return view('marketplace.suppliers.password',['title'=>'Byt lösenord',
    'ratings'=>$review_count['rating'],
    'review_count'=>$review_count['review_count'], 'request_count'=>sizeof($requests),
    'credit'=>$credits,
    ]);


})->name('settings.password');


//for generating invoices/paying invoices generated by the site administrators
Route::get('/settings/invoices',function(){
    $uid = \Auth::user()->id;
    
    $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
    $catCount = sizeof(\App\Models\Categories::all());
    $ratingObj = new \App\Http\Controllers\RatingsController;
    $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;
    $invoices = \App\Http\Controllers\InvoicesController::getall($uid);
    $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

    $review_count = $ratingObj->getRatings($uid);

    
    return view('marketplace.suppliers.invoices',['title'=>'Fakturor Och',
    'ratings'=>$review_count['rating'],
    'review_count'=>$review_count['review_count'], 'request_count'=>sizeof($requests),
    'credit'=>$credits,'invoices'=>$invoices,'id'=>1,
    ]);

})->name('settings.invoices');


//for ratings
Route::get('/settings/ratings',function(){

  $testimonials = \App\Http\Controllers\RatingTestimonialsController::getTestimonials(\Auth::user()->id);  
  $requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
  $catCount = sizeof(\App\Models\Categories::all());
  $ratingObj = new \App\Http\Controllers\RatingsController;

  $credits= \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits;

  $review_count = $ratingObj->getRatings($uid);

    return view('marketplace.suppliers.ratings',['title'=>'Omdömen ',
    'ratings'=>$review_count['rating'],
    'review_count'=>$review_count['review_count'], 'request_count'=>sizeof($requests),
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


/*************
 * THIS ROUTES IS FOR ALL USERS BOTH SUPPLIERS AND BUYERS
 */

 //sending message to a buyer
//THIS FUNCTION ENSURES THAT THE PERSON SENDING MSG WOULD  HAVE HIS ID APPENDED TO the end to the message
//for quality assurance purposes
Route::post('/send-bid','\App\Http\Controllers\SuppliersController@sendbid')->name('marketplace.supplier.sendbid')->middleware(['verified','auth']);

Route::get('/see-request-box/{request_id}')->name('marketplace.buyers.seechatbox');

//for buyers to send messages to sellers
Route::post('/send-message-to-seller','\App\Http\Controllers\RespondersController@sendmsgtoseller')->name('marketplace.buyers.sendmsg')->middleware(['verified','auth']);

//viewing images
Route::get('view_img/{img_name}',function($img_name){

    return view('pages.image_preview')->with(['img_name'=>$img_name]);

})->name('view_img')->middleware(['auth']);


//for profile pages for all users
Route::get('/user-profile',[App\Http\Controllers\UserController::class,'profile'])->name('pages.profile')->middleware(['auth','verified']);

/***
 * FOR SENDING AND BROADCASTING MESSAGES VIA THE CHAT BOX
 */
Route::post('/send-message',function(Request $request){
    event(new Message($request->input('uid'), $request->input('request_response')));
    })->middleware(['auth']);
    
    