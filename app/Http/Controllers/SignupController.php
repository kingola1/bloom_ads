<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'email' => 'required|email',
            'budget' => 'required|numeric',
        ]);
    
        // If validation passes, store the data in a CSV file
        $file = fopen('bloom_ad.csv', 'a');
        fputcsv($file, $validatedData);
        fclose($file);
    
        // Return a success message
        return redirect()->back()->with('success', 'Form submitted successfully! you will be contacted very soon thank you');
    }
}
