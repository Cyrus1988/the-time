<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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

    public function scopeDiscount($query)
    {
        return $query->where('discount', '!=', 0)->limit(8)->get();
    }

    public function scopeBrandByGender($query, $gender)
    {
        return $query->select('brand_id')->where('gender', $gender)->distinct('brand_id')->with('brand')->get();
    }
}
