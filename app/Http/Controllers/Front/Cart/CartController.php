<?php

namespace App\Http\Controllers\Front\Cart;

use App\Http\Controllers\Controller;
use App\Repositories\Front\ProductRepository;
use App\Services\Front\CartService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function __construct(private CartService $cartService, private ProductRepository $productRepository)
    {
    }

    /**
     * Get all products from cart in session
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('front.pages.cart.index', [
            'items' => $this->cartService->getContent()
        ]);
    }

    /**
     * Add to cart in current session
     * @param Request $request
     * @return JsonResponse
     */
    public function addToCart(Request $request): JsonResponse
    {
        $product = $this->productRepository->getById($request->id);

        $this->cartService->addToCart($product);

        return response()->json($this->cartService->getContent());
    }

    /**
     * @param Request $request
     */
    public function remove(Request $request)
    {
        $this->cartService->removeById($request->id);
    }
}
