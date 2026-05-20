<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nim' => '20230001',
                'nama' => 'Budi',
                'jurusan' => 'Informatika',
                'angkatan' => '2023',
                'alamat' => 'Jl. Merdeka No. 1, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230002',
                'nama' => 'Siti',
                'jurusan' => 'Sistem Informasi',
                'angkatan' => '2023',
                'alamat' => 'Jl. Sudirman No. 5, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230003',
                'nama' => 'Rizki',
                'jurusan' => 'Informatika',
                'angkatan' => '2024',
                'alamat' => 'Jl. Pahlawan No. 10, Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230004',
                'nama' => 'Aisha',
                'jurusan' => 'Informatika',
                'angkatan' => '2024',
                'alamat' => 'Jl. Diponegoro No. 3, Medan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);    
    }
}
