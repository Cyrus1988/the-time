<?php

namespace App\Repositories\Front;

use App\Models\Brand;

class BrandRepository
{
    /**
     * @param string $slug
     * @return Brand
     */
    public function getBySlug(string $slug): Brand
    {
        return Brand::where('slug', $slug)->first();
    }
}
