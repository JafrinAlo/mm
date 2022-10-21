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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', [UserPagesController::class,'index']);
Route::get('/home','App\Http\Controllers\UserPagesController@index');
Route::get('/food_request','App\Http\Controllers\UserPagesController@food_request');
Route::get('/pay_bill','App\Http\Controllers\UserPagesController@pay_bill');
