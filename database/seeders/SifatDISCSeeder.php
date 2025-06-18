<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SifatDISCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sifat = [
            [
                'kode_sifat'=>"S001",
                'nama_sifat'=>'Dominance (D)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat'=>"S002",
                'nama_sifat'=>'Influence  (I)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat'=>"S003",
                'nama_sifat'=>'Steadiness (S)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sifat'=>"S004",
                'nama_sifat'=>'Conscientiousness (C)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('sifat_disc')->insert($sifat);

    }
}
