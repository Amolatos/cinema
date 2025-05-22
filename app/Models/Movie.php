<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'release_date',
        'genre',
        'poster_url',
        'price',
    ];

    protected $casts = [
        'release_date' => 'date',
        'price' => 'decimal:2',
    ];
} 