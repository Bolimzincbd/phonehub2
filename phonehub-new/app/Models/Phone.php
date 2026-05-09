<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';

    // Technical database words keep same
    protected $fillable = [
        'name',
        'brand',
        'price',
        'storage',
        'ram',
        'camera',
        'battery',
        'screen_size',
        'description',
        'image_url'
    ];
}