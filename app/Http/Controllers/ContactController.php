<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);
        contact::create($request->all());

        // Store the contact form data in the database or send an email
        // You can customize this part based on your requirements

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
