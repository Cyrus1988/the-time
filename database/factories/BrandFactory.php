<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        $brandPhotos = ['no-image.png', 'abt-1.jpg', 'abt-2.jpg', 'abt-3.jpg'];

        $photoName = $brandPhotos[array_rand($brandPhotos)];

        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->text,
            'image' => $photoName
        ];
    }
}
