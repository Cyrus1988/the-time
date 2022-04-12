<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'description',
        'slug',
        'image'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeMostFilledBrand($query)
    {
        $productId = DB::table('products')
            ->selectRaw('brand_id, COUNT(*) as sum')
            ->groupBy('brand_id')
            ->orderByDesc('sum')
            ->limit(3)
            ->pluck('brand_id');

        return $query->whereIn('id', $productId)->get();
    }

    public function scopeBrand($query)
    {
        return $query->select(['id', 'name', 'slug'])->get();
    }
}
