<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    //
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'house_name' => 'required',
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contactRequest = new ContactRequest();
        $contactRequest->house_name = $request->input('house_name');
        $contactRequest->email = $request->input('email');
        $contactRequest->first_name = $request->input('first_name');
        $contactRequest->last_name = $request->input('last_name');
        $contactRequest->subject = $request->input('subject');
        $contactRequest->message = $request->input('message');

        $contactRequest->save();

        return redirect()->back()->with('success', 'Votre demande a été soumise avec succès.');
    }
}
