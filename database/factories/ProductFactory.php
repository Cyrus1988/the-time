<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        $categoryCount = Category::count();

        return [
            'name' => $name,
            'gender' => Arr::random(['female', 'male', 'unisex']),
            'price' => rand(0, 1000),
            'description' => $this->faker->realText,
            'image' => 'no-image.png',
            'discount' => Arr::random([0, 20, 50]),
            'slug' => Str::slug($name, '-'),
            'category_id' => rand(1, $categoryCount)
        ];
    }
}
