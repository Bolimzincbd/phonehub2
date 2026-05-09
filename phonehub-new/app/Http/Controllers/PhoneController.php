<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index(Request $request)
    {
        // Make query builder for database
        $query = Phone::query();

        // If user type in search box, filter the database name and brand
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('brand', 'like', '%' . $request->search . '%');
        }

        // Get phone from database after search filter
        $phones = $query->get();
        return view('home', compact('phones'));
    }

    public function show($id)
    {
        // Find one phone only
        $phone = Phone::findOrFail($id);
        return view('detail', compact('phone'));
    }
}