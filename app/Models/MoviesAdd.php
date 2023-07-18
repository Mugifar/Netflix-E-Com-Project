<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesAdd extends Model
{
    protected $table = 'moviesadd';
    protected $fillable = [
        'name',
        'category',
        'cast',
        'language',
        'year',
        'runtime',
        'genres',
        'discription',
        'image',
        'movie_clip',
    ];
}
