<?php

namespace App\Http\Controllers\Front\Products;

use App\Http\Controllers\Front\FrontController;
use App\Http\Filters\ProductFilter;
use App\Repositories\Front\BrandRepository;
use App\Repositories\Front\ProductRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends FrontController
{
    protected string $main_name = 'Products';
    protected string $main_route = 'front.product.index';

    public function __construct(private ProductRepository $productRepository, private BrandRepository $brandRepository)
    {
        parent::__construct();
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
        $rep = new ProductRepository();

        $product = $rep->getBySlug($slug);

        return view('front.pages.product.single', [
            'product' => $product
        ]);
    }
}
