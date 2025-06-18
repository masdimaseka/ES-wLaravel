<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SifatDISC extends Model
{
    use HasFactory;
    protected $table = 'sifat_disc';
    protected $guard = ["id"];
    protected $fillable = ["kode_sifat", "nama_sifat"];
}
