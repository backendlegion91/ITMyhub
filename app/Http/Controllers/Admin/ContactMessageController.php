<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactMessageController extends Controller
{
    //


public function index(Request $request)
{
    $query = Contact::query();

    if ($request->filled('search')) {
        $query->where('name', 'like', "%{$request->search}%")
              ->orWhere('email', 'like', "%{$request->search}%")
              ->orWhere('message', 'like', "%{$request->search}%");
    }

    $messages = $query->latest()->paginate(10);

    return view('admin.messages.index', compact('messages'));
}

public function toggleRead($id)
{
    $message = Contact::findOrFail($id);
    $message->is_read = !$message->is_read;
    $message->save();

    return back()->with('success', 'Message status updated.');
}

public function reply(Request $request, $id)
{
    $request->validate([
        'reply_message' => 'required|string|max:1000',
    ]);

    $contact = Contact::findOrFail($id);

    Mail::raw($request->reply_message, function ($mail) use ($contact) {
        $mail->to($contact->email)
             ->subject("Reply to your message");
    });

    return back()->with('success', 'Reply sent successfully.');
}

}
