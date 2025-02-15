<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {    
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'digits:9'],
            'comment' => ['required', 'string', 'min:10'],
        ]);
            
        $contact = Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'comment' => $request->comment,
        ]);

        

        Mail::to('jonathanportugal@gmail.com')->send(new ContactMail($contact));

        
        return redirect()->back()->with('success', 'Tu mensaje ha sido enviado con éxito.');
    }
}
