<?php

namespace App\Http\Controllers\Front\Brands;

use App\Http\Controllers\Front\FrontController;
use App\Repositories\Front\BrandRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BrandController extends FrontController
{
    protected string $main_name = 'Brands';
    protected string $main_route = 'front.brand.index';

    public function __construct(private BrandRepository $brandRepository)
    {
        parent::__construct();
    }

    public function index(): RedirectResponse
    {
        return redirect()->back();
    }


    /**
     * Display single brand with top 3 products by brand-slug.
     *
     * @param $slug
     * @return Application|Factory|View
     */
    public function show($slug): View|Factory|Application
    {
        $brand = $this->brandRepository->getBySlug($slug);

        return view('front.pages.brand.single', [
            'brand' => $brand,
            'productCount' => $brand->product()->count(),
            'topProducts' => $brand->product()->limit(3)->get(),
        ]);
    }
}
