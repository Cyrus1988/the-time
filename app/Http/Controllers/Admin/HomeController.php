<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::all()->count();
        die();
        return view('admin.home', [
            'products' => $products
        ]);
    }
}
