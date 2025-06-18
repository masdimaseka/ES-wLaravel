<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiUser extends Model
{
    use HasFactory;
    protected $table = 'kondisi_user';
    protected $guard = ["id"];
    protected $fillable = ["opsi", "nilai"];
}
