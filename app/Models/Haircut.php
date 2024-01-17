<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haircut extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'namaModel',
        'fotoModel',
    ];
}
