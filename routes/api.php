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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/v1/payments', 'api\v1\PaymentsController@index');
Route::get('/v1/payments/{id?}', 'api\v1\PaymentsController@show');
Route::post('/v1/payments/store', 'api\v1\PaymentsController@store');
Route::post('/v1/payments/update', 'api\v1\PaymentsController@update');
Route::delete('/v1/payments/{id?}', 'api\v1\PaymentsController@destroy');