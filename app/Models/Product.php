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

    public function scopeDiscount($query)
    {
        return $query->where('discount','!=',0)->limit(8)->get();
    }
}
