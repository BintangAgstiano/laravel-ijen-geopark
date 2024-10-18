<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID');
        $sluger = $faker->sentence;
        return [
            'judul' => $sluger,
            'isi' => $faker->text(1000),
            'slug' => Str::of($sluger)->slug('-'),
            'lokasi' => $faker->address,
            'penulis' => $faker->name,
            'tanggal' => $faker->dateTime
        ];
    }
}
