<?php

use Illuminate\Http\Request;


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');

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
Route::resource('/user','UserController');
Route::resource('/task','TaskController');
Route::resource('/userdata','UserDataController');
Route::resource('/carddata','CarddataController');
Route::resource('/data', 'MapController');
Route::get('/getdata/{userid}','CarddataController@search');