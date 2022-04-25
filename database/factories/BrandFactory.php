<?php

namespace Database\Factories;

use App\Contracts\GetPhotoForFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory implements GetPhotoForFactory
{
    const PATH = 'public/brand';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        $arrayPhoto = $this->preparePhoto();

        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->text,
            'image' => $arrayPhoto[array_rand($arrayPhoto)],
        ];
    }

    public function preparePhoto(): array
    {
        $files = Storage::files(self::PATH);

        $arrayPhoto = [];

        for ($i = 0; $i < count($files); $i++) {
            $arrayPhoto[] = str_replace(self::PATH . '/', '', $files[$i]);
        }

        return $arrayPhoto;
    }
}
