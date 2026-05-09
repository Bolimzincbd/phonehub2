<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorePrice extends Model
{
    protected $table = 'store_prices';

    protected $fillable = ['store_id', 'phone_id', 'price', 'link'];

    public function phone()
    {
        return $this->belongsTo(Phone::class, 'phone_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}