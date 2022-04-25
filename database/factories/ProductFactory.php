<?php

namespace Database\Factories;

use App\Contracts\GetPhotoForFactory;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Product>
 */
class ProductFactory extends Factory implements GetPhotoForFactory
{
    const PATH = 'public';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        $arrayPhoto = $this->preparePhoto();

        $brandCount = Brand::count();

        return [
            'name' => $name,
            'gender' => Arr::random(['female', 'male', 'kids']),
            'price' => rand(0, 1000),
            'description' => $this->faker->realText,
            'image' => $arrayPhoto[array_rand($arrayPhoto)],
            'discount' => Arr::random([0, 20, 50]),
            'slug' => Str::slug($name, '-'),
            'brand_id' => rand(1, $brandCount)
        ];
    }

    public function preparePhoto(): array
    {
        $files = Storage::files(self::PATH);

        $arrayProductPhoto = [];

        for ($i = 0; $i < count($files); $i++) {
            $productPhoto = str_replace(self::PATH . '/', '', $files[$i]);

            if (str_starts_with($productPhoto, 'p-')) {
                $arrayProductPhoto[] = $productPhoto;
            }
        }

        return $arrayProductPhoto;
    }
}
