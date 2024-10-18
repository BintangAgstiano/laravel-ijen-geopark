<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destinasi>
 */
class DestinasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID');
        $sluger = $faker->city;

        return [
            'nama_wisata' => $sluger,
            'deskripsi' => $faker->text(1000),
            'slug' => Str::of($sluger)->slug('-'),
            'lokasi' => $faker->address,
            // 'rating' => $faker->randomFloat(1,1,5),
            'gambar' => $faker->imageUrl(640, 480, 'travel', true, 'Destinasi')
        ];
    }
}
