<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Front\BrandRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BrandController extends Controller
{

    public function __construct(private BrandRepository $brandRepository)
    {
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
