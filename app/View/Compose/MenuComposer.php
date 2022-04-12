<?php

namespace App\View\Compose;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        //TODO это добавить в кеш
        $brands = Brand::brand();
//        dd($brands);
//        $femaleProducts = Product::brandByGender();
//        $unisexProducts = Product::brandByGender('unisex');

        $view->with('brands', $brands);
    }
}
