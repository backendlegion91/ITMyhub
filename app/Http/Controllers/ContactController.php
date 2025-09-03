<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller

{
   public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Save to database
        Contact::create($validated);

        // Optional: Send email
        Mail::raw("Name: {$validated['name']}\nEmail: {$validated['email']}\nMessage: {$validated['message']}", function ($msg) use ($validated) {
            $msg->to('backendlegion91@gmail.com')
                ->subject('New Contact Message');
        });

        return back()->with('success', 'Message sent and saved successfully!');
    }

}

