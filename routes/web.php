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
    return view('homepage')->with(['title'=>'Vi hjälper dig hitta rätt tjänsteföretag']);
})->name('index');

//unauthorized/non/unauthenticated users goes here
Route::get('/authorized',function(){
    return view('errors.unauthorized')->with(['title'=>'Unauthorized']);
})->name('unauthorized');

//for running finder search for service companies
Route::get('/finder',function(){
    
})->name('finder_search');


//Route for ancilliary pages
Route::get('anslut-ditt-foretag',function(){
    return view('pages.anslut-ditt-foretag',['title'=>'Anslut Ditt Foretag']);
})->name('anslut-ditt-foretag');
//authentication routes
//Authentication and authorization interfaces route
Auth::routes(['verify'=>true]);


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
