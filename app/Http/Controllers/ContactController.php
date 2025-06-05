<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'nullable',
        ]);
        $contact = Contact::create($request->all());
        Mail::to('cybrexustech@gmail.com')->send(new ContactMail($contact));

        return back()->with('success', 'Contact submitted successfully');
    }

    public function show(Contact $contact){
        return view('contacts.show', compact('contact'));
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Contact deleted successfully');
    }
}
