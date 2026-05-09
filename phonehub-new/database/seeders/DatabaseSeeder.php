<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin Boss so you can go to dashboard
        User::create([
            'name' => 'Admin Boss',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        // Run the other seed files
        $this->call([
            PhoneSeeder::class,
            StoreSeeder::class,
            StorePriceSeeder::class,
        ]);
    }
}