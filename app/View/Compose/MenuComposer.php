<?php

namespace App\View\Compose;

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
        $maleProducts = Product::brandByGender('male');
        $femaleProducts = Product::brandByGender('female');
        $unisexProducts = Product::brandByGender('unisex');

        $view->with(['male' => $maleProducts, 'female' => $femaleProducts, 'unisex' => $unisexProducts]);
    }
}
