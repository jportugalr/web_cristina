<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {        
        $contact = Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'comment' => $request->comment,
        ]);
        

        //Mail::to('jonathanportugal@msn.com')->send(new ContactMail($contact));

        
        return redirect()->back()->with('success', 'Tu mensaje ha sido enviado con éxito.');
    }
}
