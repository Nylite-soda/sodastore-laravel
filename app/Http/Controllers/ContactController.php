<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'email' => 'required|email|unique:contacts,email|max:255',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Save data to database
        Contact::create($validatedData);

        return redirect()->route('thank-you')->withSuccess("Thank you for contacting us!");
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}