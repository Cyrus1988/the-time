<?php

namespace App\Services\Front;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartService
{
    /**
     * Cart session initialization
     * @return void
     */
    private function getCartSession(): void
    {
        \Cart::session(Auth::user()->id);
    }

    /**
     * @return mixed
     */
    public function getContent(): mixed
    {
        $this->getCartSession();

        return \Cart::getContent();
    }

    /**
     * @param Product $product
     * @return void
     */
    public function addToCart(Product $product): void
    {
        $this->getCartSession();

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => [
                'slug' => $product->slug,
                'image' => $product->image,
            ]
        ]);
    }

    /**
     * @param int $id
     * @return void
     */
    public function removeById(int $id): void
    {
        $this->getCartSession();

        \Cart::remove($id);
    }
}
