<?php

use Illuminate\Support\Facades\Route;

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
/*
==================
Grouped routes for both authenticated users and unauthenticated users
===================
*/

//grouping all routes under the dashboard/admin namespace for super-admin users
Route::middleware(['auth','admin'])->prefix('dashboard')->group(function(){


});


//grouping all routes under the  namespace for super-admin users
Route::middleware(['auth','superadmin'])->prefix('dashboard/sa')->group(function(){


});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
