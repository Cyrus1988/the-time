<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $category = Category::mostFilledCategory();

        return view('front.home', [
            'products' => $discountProduct,
            'categories' => $category
        ]);
    }
}
