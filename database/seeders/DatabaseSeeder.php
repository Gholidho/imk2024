<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
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
        $this->call([
            KategoriBeritaSeeder::class,
            LayananSeeder::class,
            LayananFaqSeeder::class,
            FaqSeeder::class,
            BeritaSeeder::class,
            NewsTableSeeder::class,
            // Tambahkan seeder lainnya jika ada
        ]);
    }
}
