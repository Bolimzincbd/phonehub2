<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class PhoneController
{
    public function show($id)
    {
        $phone = Phone::with('storePrices.store')->findOrFail($id);
        return view('detail', compact('phone'));
    }
}