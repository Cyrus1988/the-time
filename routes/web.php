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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('front.app');
//});

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::resource('product', \App\Http\Controllers\Front\ProductController::class)->names('front.product');
Route::resource('brand', \App\Http\Controllers\Front\BrandController::class)->names('front.brand');
