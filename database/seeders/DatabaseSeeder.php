<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Destinasi;
use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Destinasi::factory(10)->create();
        Berita::factory(10)->create();
        Galeri::factory(20)->create();
    }
}
