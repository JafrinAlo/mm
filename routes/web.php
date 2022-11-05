<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

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


//user pages/////////////////////////////////////////////////////
Route::get('/dashboard','App\Http\Controllers\UserPagesController@index');
Route::resource('food_request','App\Http\Controllers\FoodRequestsController');
Route::resource('pending','App\Http\Controllers\UserFoodRequestsController');

//menu data selections user
Route::resource('menu','App\Http\Controllers\MenusController');
Route::get('/pay_bill','App\Http\Controllers\UserPagesController@pay_bill')->name('user');



////admin views////////////////////////

Route::get('/admin','App\Http\Controllers\AdminPagesController@index')->name('admin');
Route::get('/confirm_bill','App\Http\Controllers\AdminPagesController@confirm_bill');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


