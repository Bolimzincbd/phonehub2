<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Phone::create([
            'name' => 'iPhone 13 Pro',
            'brand' => 'Apple',
            'price' => 999.00,
            'storage' => '256GB',
            'ram' => '6GB',
            'camera' => '12MP',
            'battery' => '3095 mAh',
            'screen_size' => '6.1 inches',
            'description' => 'A very fast phone with a good camera.',
            'image_url' => 'apple-iphone-13-pro.jpg' // Make sure this image is in public/images/
        ]);
    }
}