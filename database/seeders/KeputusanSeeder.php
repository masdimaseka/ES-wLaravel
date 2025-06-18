<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeputusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keputusan = [
            [
                'kode_sifat' => 'P001',
                'kode_gejala' => 'G001',
                'mb' => 0.90,
                'md' => 0.10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P002',
                'kode_gejala' => 'G002',
                'mb' => 0.85,
                'md' => 0.10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P003',
                'kode_gejala' => 'G003',
                'mb' => 0.80,
                'md' => 0.15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P004',
                'kode_gejala' => 'G004',
                'mb' => 0.90,
                'md' => 0.05,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P001',
                'kode_gejala' => 'G005',
                'mb' => 0.80,
                'md' => 0.20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P002',
                'kode_gejala' => 'G006',
                'mb' => 0.75,
                'md' => 0.20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P003',
                'kode_gejala' => 'G007',
                'mb' => 0.90,
                'md' => 0.05,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P004',
                'kode_gejala' => 'G008',
                'mb' => 0.85,
                'md' => 0.10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P001',
                'kode_gejala' => 'G009',
                'mb' => 0.80,
                'md' => 0.15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P002',
                'kode_gejala' => 'G010',
                'mb' => 0.70,
                'md' => 0.20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P003',
                'kode_gejala' => 'G011',
                'mb' => 0.85,
                'md' => 0.10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat' => 'P004',
                'kode_gejala' => 'G012',
                'mb' => 0.90,
                'md' => 0.05,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('keputusan')->insert($keputusan);

    }
}
