<?php

namespace App\Http\Filters;

class ProductFilter extends QueryFilter
{
    public function brand(array $brand)
    {
        if (!$brand) {
            return null;
        }

        return $this->builder->whereIn('brand_id', $brand);
    }

    public function gender(array $gender)
    {
        if (!$gender) {
            return null;
        }

        return $this->builder->whereIn('gender', $gender);
    }

    public function discount(int $discount)
    {
        if (!$discount) {
            return null;
        }

        return $this->builder->where('discount', '>=', $discount);
    }

}
