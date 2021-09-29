<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/customers', 'CustomerController@customers');
Route::middleware('auth:api')->get('/customers/{id}', 'CustomerController@show');
Route::middleware('auth:api')->post('/customers', 'CustomerController@add');
Route::middleware('auth:api')->put('/customers/{id}', 'CustomerController@update');
Route::middleware('auth:api')->delete('/customers/{id}', 'CustomerController@delete');
