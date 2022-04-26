<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Filterable;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'gender',
        'price',
        'description',
        'image',
        'hit',
        'slug',
        'category_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeDiscount($query)
    {
        return $query->where('discount', '!=', 0)->limit(8)->get();
    }

    public function scopeBrandByGender($query)
    {
        return $query->select('brand_id')->distinct('brand_id')->with('brand')->get();
    }
}
