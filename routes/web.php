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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', HomeController::class)->name('home');

Route::resource('product', ProductController::class)
    ->only(['index', 'show'])
    ->names('front.product');

Route::resource('brand', BrandController::class)
    ->only(['index', 'show'])
    ->names('front.brand');

Route::get('cabinet')->name('cabinet');
