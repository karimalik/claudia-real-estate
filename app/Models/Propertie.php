<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'beds',
        'baths',
        'city',
        'address',
        'number_pieces',
        'years',
        'description',
        'image',
        'images',
        'basement',
        'garage',
        'foundation',
    ];
}
