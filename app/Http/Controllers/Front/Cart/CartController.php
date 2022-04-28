<?php

namespace App\Http\Controllers\Front\Cart;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // TODO cart index-view-page
        return view('front.pages.cart.index');
    }

    //TODO service layer
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);

        $sessionId = Auth::user()->id;

        \Cart::session($sessionId);

//        // add the product to cart
        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            // TODO с прайсом нужно будет что то сделать, это полная дичь, мб cast мб что то еще
            'price' => ($product->price - ($product->price * $product->discount / 100)),
            'quantity' => 1
        ]);

        return response()->json(\Cart::getContent());
    }
}
