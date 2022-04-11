<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'slug',
        'image'
    ];

    public function scopeMostFilledCategory($query)
    {
        $productId = DB::table('products')
            ->selectRaw('category_id, COUNT(*) as sum')
            ->groupBy('category_id')
            ->orderByDesc('sum')
            ->limit(3)
            ->pluck('category_id');

        return $query->whereIn('id', $productId)->get();
    }
}
