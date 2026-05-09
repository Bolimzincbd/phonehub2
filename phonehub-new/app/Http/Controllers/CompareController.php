<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class CompareController
{
    public function index()
    {
        $compareIds = session()->get('compare', []);
        $phones = Phone::whereIn('id', $compareIds)->get();
        return view('compare', compact('phones'));
    }

    public function add($id)
    {
        $compare = session()->get('compare', []);
        
        if (count($compare) >= 3) {
            return back()->with('error', 'You cannot compare more than 3 phone!');
        }

        if (!in_array($id, $compare)) {
            $compare[] = $id;
            session()->put('compare', $compare);
        }

        return back()->with('success', 'Phone put in compare list success.');
    }

    public function remove($id)
    {
        $compare = session()->get('compare', []);
        if (($key = array_search($id, $compare)) !== false) {
            unset($compare[$key]);
            session()->put('compare', array_values($compare));
        }
        
        return back()->with('success', 'Phone remove from compare.');
    }
}