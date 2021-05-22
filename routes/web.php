<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\HomeController;

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

//A new Route
Route::get('/restaurants',[RestaurantController::class,'index']);
Route::get('/restaurants/create', [RestaurantController::class,'create']);
Route::post('/restaurants', [RestaurantController::class,'store']);
Route::get('/restaurants/{id}',[RestaurantController::class,'show']);
Route::delete('/restaurants/{id}',[RestaurantController::class,'destroy']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
