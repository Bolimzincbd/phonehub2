<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        // Get all phone from database
        $phones = Phone::all();
        return view('home', compact('phones'));
    }

    public function show($id)
    {
        // Find one phone only
        $phone = Phone::findOrFail($id);
        return view('detail', compact('phone'));
    }
}