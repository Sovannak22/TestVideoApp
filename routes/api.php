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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'App\Http\Controllers\Api\AuthController@login')->name("login");

// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('/users', 'App\Http\Controllers\Api\UserController@index');
// });
Route::middleware('auth:sanctum')->get('/users', 'App\Http\Controllers\Api\UserController@index');
// Route::get('/users', 'App\Http\Controllers\Api\UserController@index');
Route::post('uploadVideo', 'App\Http\Controllers\VideoController@uploadVideo');