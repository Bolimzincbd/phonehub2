<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    
    protected $fillable = ['name', 'link'];

    public function storePrices()
    {
        return $this->hasMany(StorePrice::class, 'store_id');
    }
}