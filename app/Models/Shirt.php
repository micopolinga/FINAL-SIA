<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'price'];

    protected $casts = [
        'price' => 'float',
    ];
}
