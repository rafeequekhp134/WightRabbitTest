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

Route::get('/', function () {
    return view('welcome');
});

Route::group([

    'middleware' => 'api',
    // 'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::get('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');

});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });