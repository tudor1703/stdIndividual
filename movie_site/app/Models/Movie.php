<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Permitem atribuirea în masă pentru aceste câmpuri
    protected $fillable = [
        'title',
        'director',
        'genre',
        'release_year',
        'description',
        'image', // nou
    ];
}