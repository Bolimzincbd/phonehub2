<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        Store::create([
            'name' => 'Phone Shop 1',
            'link' => 'https://phoneshop1.com'
        ]);

        Store::create([
            'name' => 'Mobile City',
            'link' => 'https://mobilecity.com'
        ]);

        Store::create([
            'name' => 'Tech Store',
            'link' => 'https://techstore.com'
        ]);
    }
}