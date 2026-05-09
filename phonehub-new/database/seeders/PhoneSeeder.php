<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    public function run(): void
    {
        // Latest Phones
        Phone::create([
            'name' => 'iPhone 15 Pro',
            'brand' => 'Apple',
            'price' => 999.00,
            'storage' => '256GB',
            'ram' => '8GB',
            'os' => 'iOS 17',
            'camera' => '48MP',
            'battery' => '3274 mAh',
            'screen_size' => '6.1 inches',
            'processor' => 'A17 Pro',
            'description' => 'Very fast new Apple phone. Good camera for photo.',
            'image_url' => 'iphone-15-pro.jpg',
            'status' => 'Latest'
        ]);

        Phone::create([
            'name' => 'Samsung Galaxy S24 Ultra',
            'brand' => 'Samsung',
            'price' => 1299.00,
            'storage' => '512GB',
            'ram' => '12GB',
            'os' => 'Android 14',
            'camera' => '200MP',
            'battery' => '5000 mAh',
            'screen_size' => '6.8 inches',
            'processor' => 'Snapdragon 8 Gen 3',
            'description' => 'Big screen phone with pen. Very good for work.',
            'image_url' => 'samsung-s24-ultra.jpg',
            'status' => 'Latest'
        ]);

        Phone::create([
            'name' => 'Google Pixel 8 Pro',
            'brand' => 'Google',
            'price' => 899.00,
            'storage' => '128GB',
            'ram' => '12GB',
            'os' => 'Android 14',
            'camera' => '50MP',
            'battery' => '5050 mAh',
            'screen_size' => '6.7 inches',
            'processor' => 'Tensor G3',
            'description' => 'Google phone with very smart AI brain.',
            'image_url' => 'pixel-8-pro.jpg',
            'status' => 'Latest'
        ]);

        Phone::create([
            'name' => 'OnePlus 12',
            'brand' => 'OnePlus',
            'price' => 799.00,
            'storage' => '256GB',
            'ram' => '12GB',
            'os' => 'Android 14',
            'camera' => '50MP',
            'battery' => '5400 mAh',
            'screen_size' => '6.8 inches',
            'processor' => 'Snapdragon 8 Gen 3',
            'description' => 'Fast charge battery and very smooth screen.',
            'image_url' => 'oneplus-12.jpg',
            'status' => 'Latest'
        ]);

        // Recommended Phones
        Phone::create([
            'name' => 'iPhone 14',
            'brand' => 'Apple',
            'price' => 699.00,
            'storage' => '128GB',
            'ram' => '6GB',
            'os' => 'iOS 16',
            'camera' => '12MP',
            'battery' => '3279 mAh',
            'screen_size' => '6.1 inches',
            'processor' => 'A15 Bionic',
            'description' => 'Good Apple phone for normal use. Price is okay.',
            'image_url' => 'iphone-14.jpg',
            'status' => 'Recommended'
        ]);

        Phone::create([
            'name' => 'Samsung Galaxy A54',
            'brand' => 'Samsung',
            'price' => 449.00,
            'storage' => '128GB',
            'ram' => '8GB',
            'os' => 'Android 13',
            'camera' => '50MP',
            'battery' => '5000 mAh',
            'screen_size' => '6.4 inches',
            'processor' => 'Exynos 1380',
            'description' => 'Cheap Samsung but have good battery life.',
            'image_url' => 'samsung-a54.jpg',
            'status' => 'Recommended'
        ]);

        Phone::create([
            'name' => 'Google Pixel 7a',
            'brand' => 'Google',
            'price' => 499.00,
            'storage' => '128GB',
            'ram' => '8GB',
            'os' => 'Android 13',
            'camera' => '64MP',
            'battery' => '4385 mAh',
            'screen_size' => '6.1 inches',
            'processor' => 'Tensor G2',
            'description' => 'Best camera phone for cheap price.',
            'image_url' => 'pixel-7a.jpg',
            'status' => 'Recommended'
        ]);

        Phone::create([
            'name' => 'Xiaomi Redmi Note 13',
            'brand' => 'Xiaomi',
            'price' => 299.00,
            'storage' => '256GB',
            'ram' => '8GB',
            'os' => 'Android 13',
            'camera' => '108MP',
            'battery' => '5000 mAh',
            'screen_size' => '6.6 inches',
            'processor' => 'MediaTek 6080',
            'description' => 'Very cheap price but big screen and big storage.',
            'image_url' => 'redmi-note-13.jpg',
            'status' => 'Recommended'
        ]);

        // Upcoming Phones
        Phone::create([
            'name' => 'iPhone 16 Pro',
            'brand' => 'Apple',
            'price' => 1099.00,
            'storage' => '256GB',
            'ram' => '8GB',
            'os' => 'iOS 18',
            'camera' => '48MP',
            'battery' => '3500 mAh',
            'screen_size' => '6.3 inches',
            'processor' => 'A18 Pro',
            'description' => 'Next year Apple phone. Will have new AI thing.',
            'image_url' => 'iphone-16-pro.jpg',
            'status' => 'Upcoming'
        ]);

        Phone::create([
            'name' => 'Samsung Galaxy Z Fold 6',
            'brand' => 'Samsung',
            'price' => 1799.00,
            'storage' => '512GB',
            'ram' => '12GB',
            'os' => 'Android 14',
            'camera' => '50MP',
            'battery' => '4600 mAh',
            'screen_size' => '7.6 inches',
            'processor' => 'Snapdragon 8 Gen 3',
            'description' => 'New folding phone. Screen open to big tablet.',
            'image_url' => 'z-fold-6.jpg',
            'status' => 'Upcoming'
        ]);

        Phone::create([
            'name' => 'Google Pixel 9 Pro',
            'brand' => 'Google',
            'price' => 999.00,
            'storage' => '256GB',
            'ram' => '12GB',
            'os' => 'Android 15',
            'camera' => '50MP',
            'battery' => '5100 mAh',
            'screen_size' => '6.7 inches',
            'processor' => 'Tensor G4',
            'description' => 'Next Google phone with new design body.',
            'image_url' => 'pixel-9-pro.jpg',
            'status' => 'Upcoming'
        ]);

        Phone::create([
            'name' => 'Sony Xperia 1 VI',
            'brand' => 'Sony',
            'price' => 1199.00,
            'storage' => '256GB',
            'ram' => '12GB',
            'os' => 'Android 14',
            'camera' => '48MP',
            'battery' => '5000 mAh',
            'screen_size' => '6.5 inches',
            'processor' => 'Snapdragon 8 Gen 3',
            'description' => 'Very good camera phone for video record.',
            'image_url' => 'xperia-1-vi.jpg',
            'status' => 'Upcoming'
        ]);
    }
}