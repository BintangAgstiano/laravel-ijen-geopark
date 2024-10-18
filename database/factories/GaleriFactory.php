<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'destinasi_id' => Arr::random([1,2,3,4,5,6,7,8,9,10]),
            'gambar' => $this->faker->imageUrl(640, 480, 'travel', true, 'Destinasi')
        ];
    }
}
