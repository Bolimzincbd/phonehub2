<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class HomeController
{
    public function index()
    {
        $latestPhones = Phone::where('status', 'Latest')->get();
        $recommendPhones = Phone::where('status', 'Recommended')->get();
        $upcomingPhones = Phone::where('status', 'Upcoming')->get();
        $normalPhones = Phone::where('status', 'Normal')->get();

        return view('home', compact('latestPhones', 'recommendPhones', 'upcomingPhones', 'normalPhones'));
    }
}