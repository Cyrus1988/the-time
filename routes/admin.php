<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'admin'], function () {
    Route::get('', HomeController::class)->name('admin.home');
});
