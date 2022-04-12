<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function __invoke(): View|Factory|Application
    {

        $discountProduct = Product::discount();
        $category = Brand::mostFilledBrand();

        return view('front.home', [
            'products' => $discountProduct,
            'categories' => $category
        ]);
    }
}
