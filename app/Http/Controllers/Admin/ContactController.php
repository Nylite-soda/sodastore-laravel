<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully');
    }

    public function respond(Contact $contact, Request $request)
    {
        $validated = $request->validate([
            'response' => 'required|string'
        ]);

        // Here you would typically send an email with the response
        // For now, we'll just add a flash message
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Response sent successfully');
    }
}