<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'users_id',
        'barbers_id',
        'products_id',
        'haircuts_id',
        'booking_id',
    ];
}
