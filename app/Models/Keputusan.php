<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;
    protected $table = 'keputusan';
    protected $guard = ["id"];
    protected $fillable = ['kode_gejala', 'kode_sifat', 'mb', 'md'];

    public function sifat()
    {
        return $this->belongsTo(SifatDISC::class, 'kode_sifat', 'kode_sifat');
    }
    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala', 'kode_gejala');
    }


}
