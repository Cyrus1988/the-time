<?php

use App\Http\Controllers\Front\Brands\BrandController;
use App\Http\Controllers\Front\Cart\CartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\Order\OrderController;
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

require __DIR__ . '/auth.php';


Route::get('/', HomeController::class)->name('front.home');

## PRODUCT
Route::resource('product', ProductController::class)
    ->only(['index', 'show'])
    ->names('front.product');

## BRAND
Route::resource('brand', BrandController::class)
    ->only(['index', 'show'])
    ->names('front.brand');

## CABINET
Route::get('cabinet')->name('cabinet');

## CART
Route::group(['middleware' => 'auth'], function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('remove-cart', [CartController::class, 'remove'])->name('cart.remove');

    Route::resource('orders', OrderController::class)->only('store')->names('front.order');
});

