<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController
{
    public function search(Request $request)
    {
        // Start building database query
        $query = Phone::query();

        // 1. Search by Name or Model
        if ($request->has('q') && $request->q != '') {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        // 2. Filter by Brand
        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand', $request->brand);
        }

        // 3. Filter by Operating System
        if ($request->has('os') && $request->os != '') {
            $query->where('os', $request->os);
        }

        // 4. Filter by RAM
        if ($request->has('ram') && $request->ram != '') {
            $query->where('ram', $request->ram);
        }

        // 5. Filter by Storage
        if ($request->has('storage') && $request->storage != '') {
            $query->where('storage', $request->storage);
        }

        // 6. Filter by Minimum Price
        if ($request->has('min_price') && $request->min_price != '') {
            $query->where('price', '>=', $request->min_price);
        }

        // 7. Filter by Maximum Price
        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('price', '<=', $request->max_price);
        }

        // Get final phone results from database
        $phones = $query->get();

        // Get unique lists from database to show inside the select dropdowns
        $brands = Phone::whereNotNull('brand')->distinct()->pluck('brand');
        $osList = Phone::whereNotNull('os')->distinct()->pluck('os');
        $rams = Phone::whereNotNull('ram')->distinct()->pluck('ram');
        $storages = Phone::whereNotNull('storage')->distinct()->pluck('storage');

        return view('search', compact('phones', 'brands', 'osList', 'rams', 'storages'));
    }

    public function show($id)
    {
        $phone = Phone::with('storePrices.store')->findOrFail($id);
        return view('detail', compact('phone'));
    }
}