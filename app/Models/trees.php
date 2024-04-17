<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trees extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'alias',
        'species',
        'planter',
        'location',
        'date_planted',
        'date_tagged',
    ];

        
}
