<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KondisiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kondisi = [
            [
                "opsi" => "Sangat Tidak Yakin",
                "nilai" => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "opsi" => "Tidak Yakin",
                "nilai" => 0.25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "opsi" => "Ragu-ragu",
                "nilai" => 0.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "opsi" => "Yakin",
                "nilai" => 0.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "opsi" => "Sangat Yakin",
                "nilai" => 1.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('kondisi_user')->insert($kondisi);

    }
}
