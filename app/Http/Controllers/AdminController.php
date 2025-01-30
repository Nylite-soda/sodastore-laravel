<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showContacts()
    {
        $contacts = Contact::all();  // You may add pagination here if needed

        // Pass the data to the view
        return view('admin.contacts', compact('contacts'));
    }
}

