<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = 'diagnosa';
    protected $guard = ["id"];
    protected $fillable = ["diagnosa_id", "data_diagnosa", "kondisi", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
