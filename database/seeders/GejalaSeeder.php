<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejala = [
            [
                "kode_gejala" => "G001",
                "nama_gejala" => "Anda menyukai mengambil keputusan secara cepat dan tegas",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G002",
                "nama_gejala" => "Anda mudah mempengaruhi orang lain dengan kata-kata",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G003",
                "nama_gejala" => "Anda menyukai stabilitas dan konsistensi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G004",
                "nama_gejala" => "Anda cenderung patuh pada aturan dan prosedur",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G005",
                "nama_gejala" => "Anda merasa nyaman dalam persaingan",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G006",
                "nama_gejala" => "Anda mudah bergaul dan suka menjadi pusat perhatian",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G007",
                "nama_gejala" => "Anda tenang, sabar, dan tidak terburu-buru",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G008",
                "nama_gejala" => "Anda teliti dan tidak suka kesalahan",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G009",
                "nama_gejala" => "Anda percaya diri dalam mengontrol situasi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G010",
                "nama_gejala" => "Anda senang membantu dan menghibur orang lain",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G011",
                "nama_gejala" => "Anda menghindari konflik dan menyukai harmoni",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "kode_gejala" => "G012",
                "nama_gejala" => "Anda ingin semua pekerjaan dilakukan dengan standar tinggi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        DB::table('gejala')->insert($gejala);
    }
}
