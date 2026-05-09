<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';

    protected $fillable = [
        'name', 'brand', 'price', 'storage', 'ram', 'os', 'camera', 'battery', 
        'screen_size', 'processor', 'description', 'image_url', 'status'
    ];

    public function storePrices()
    {
        return $this->hasMany(StorePrice::class, 'phone_id');
    }
}