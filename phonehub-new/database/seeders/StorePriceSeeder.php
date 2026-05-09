<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
use App\Models\Store;
use App\Models\StorePrice;

class StorePriceSeeder extends Seeder
{
    public function run(): void
    {
        $phones = Phone::all();
        $stores = Store::all();

        foreach ($phones as $phone) {
            foreach ($stores as $store) {
                // Make random price a little bit different from main price
                $randomChange = rand(-30, 40);
                $finalPrice = $phone->price + $randomChange;

                StorePrice::create([
                    'store_id' => $store->id,
                    'phone_id' => $phone->id,
                    'price' => $finalPrice,
                    'link' => $store->link . '/buy/phone-' . $phone->id
                ]);
            }
        }
    }
}