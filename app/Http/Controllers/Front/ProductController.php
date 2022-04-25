<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Repositories\Front\BrandRepository;
use App\Repositories\Front\ProductRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(private ProductRepository $productRepository, private BrandRepository $brandRepository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request, ProductFilter $filter): Factory|View|Application
    {
        $products = $this->productRepository->getByFilter($filter);

        $brands = $this->brandRepository->getAll();

        $filters = $request->query();

        return view('front.pages.product.index', [
            'products' => $products,
            'filters' => $filters,
            'brands' => $brands,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return Application|Factory|View
     */
    public function show(string $slug): View|Factory|Application
    {
        $product = $this->productRepository->getBySlug($slug);

        return view('front.pages.product.single', [
            'product' => $product
        ]);
    }
}
