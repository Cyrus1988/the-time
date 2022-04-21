<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
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

        $arrayProductPhoto = $this->preparePhoto();

        $photoId = array_rand($arrayProductPhoto);

        $brandCount = Brand::count();

        return [
            'name' => $name,
            'gender' => Arr::random(['female', 'male', 'kids']),
            'price' => rand(0, 1000),
            'description' => $this->faker->realText,
            'image' => $arrayProductPhoto[$photoId],
            'discount' => Arr::random([0, 20, 50]),
            'slug' => Str::slug($name, '-'),
            'brand_id' => rand(1, $brandCount)
        ];
    }

    private function preparePhoto(): array
    {
        $files = Storage::files('public');

        $arrayProductPhoto = [];

        for ($i = 0; $i < count($files); $i++) {
            $productPhoto = str_replace('public/', '', $files[$i]);

            if (str_starts_with($productPhoto, 'p-')) {
                $arrayProductPhoto[] = $productPhoto;
            }
        }

        return $arrayProductPhoto;
    }
}
