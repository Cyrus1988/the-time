<?php

namespace App\Repositories\Front;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandRepository
{
    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Brand::all();
    }

    /**
     * @param string $slug
     * @return Brand
     */
    public function getBySlug(string $slug): Brand
    {
        return Brand::where('slug', $slug)->first();
    }
}
