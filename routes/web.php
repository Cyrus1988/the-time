<?php

use App\Http\Controllers\Front\Brands\BrandController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\Products\ProductController;
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

Route::get('/', HomeController::class)->name('home');

Route::resource('product', ProductController::class)
    ->only(['index', 'show'])
    ->names('front.product');

Route::resource('brand', BrandController::class)
    ->only(['index', 'show'])
    ->names('front.brand');

