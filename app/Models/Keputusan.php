<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;
    protected $table = 'keputusan';
    protected $guard = ["id"];

    public function sifat()
    {
        return $this->hasMany(SifatDISC::class, 'kode_sifat', 'kode_sifat');
    }
    public function gejala()
    {
        return $this->hasMany(Gejala::class, 'kode_gejala', 'kode_gejala');
    }
}
