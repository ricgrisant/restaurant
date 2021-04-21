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

//A new Route
Route::get('/restaurant', function () {
    //Test query parameters / request
    return view('restaurant',['restaurant'=> request('name') ]);
});

Route::get('/restaurant/{id}', function ($id) {
    return view('details',['menuId' => $id ]);
});