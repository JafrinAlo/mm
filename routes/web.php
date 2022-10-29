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


//user pages/////////////////////////////////////////////////////
Route::get('/dashboard','App\Http\Controllers\UserPagesController@index');
Route::resource('food_request','App\Http\Controllers\FoodRequestsController');
//menu data selections user
Route::resource('menu','App\Http\Controllers\MenusController');
Route::get('/pay_bill','App\Http\Controllers\UserPagesController@pay_bill');



////admin views////////////////////////
Route::get('/dashboard_admin', function () {
    return view('admin_m.index');
});

Route::get('/confirm_bill', function () {
    return view('admin_m.confirm_bill');
});







// Route::get('/menu','App\Http\Controllers\UserPagesController@menu');

//menu data selections
//  Route::get('/menu','App\Http\Controllers\MenusController@index');

 
// Route::resource('specials','App\Http\Controllers\MenusController');
// Route::resource('optionals','App\Http\Controllers\MenusController');
// Route::resource('breakfasts','App\Http\Controllers\MenusController');
// Route::resource('lunches','App\Http\Controllers\MenusController');

// Route::resource('specials','App\Http\Controllers\SpecialsController');
// Route::resource('optionals','App\Http\Controllers\OptionalsController');
// Route::resource('breakfasts','App\Http\Controllers\BreakfastsController');
// Route::resource('lunches','App\Http\Controllers\LunchesController');


