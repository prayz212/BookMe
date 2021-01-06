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
    return view('slick');
});

Route::get("/item", function () {
    return view('item');
});

Route::get("/city/ha-noi", function () {
    return "this is hanoi";
});

Route::get("/city/ho-chi-minh", function () {
    return "this is hcm";
});