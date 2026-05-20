<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Letakkan di dalam method run() seperti ini:
        $this->call(MahasiswaSeeder::class);
    }
}