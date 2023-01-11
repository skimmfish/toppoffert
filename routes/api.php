<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Resources to get via this API
 * -- GET /all service requests
 * -- GET /list of users with their different categorizations
 * -- GET /list of all suppliers
 * -- GET /a single supplier
 * -- GET /a single user
 * -- GET /a single service
 * -- POST new service
 * -- PUT in an update for a service
 * -- PUT in an update for user profile
 * -- PUT in an update for supplier profile
 * -- GET /get all ratings
 * -- GET /get all testimonials
 * -- GET /an invoice
 * -- POST /create an invoice document
 * -- PUT /update an invoice
 */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
