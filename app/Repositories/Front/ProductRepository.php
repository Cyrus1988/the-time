<?php

namespace App\Repositories\Front;

use App\Http\Filters\ProductFilter;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository
{
    const SHOP_PAGE_PRODUCT_PAGINATE_COUNT = 9;

    /**
     * @param string $slug
     * @return Product
     */
    public function getBySlug(string $slug): Product
    {
        return Product::where('slug', $slug)->first();
    }

    /**
     * @param ProductFilter $filter
     * @return LengthAwarePaginator
     */
    public function getByFilter(ProductFilter $filter): LengthAwarePaginator
    {
        return Product::filter($filter)->paginate(self::SHOP_PAGE_PRODUCT_PAGINATE_COUNT);
    }
}
