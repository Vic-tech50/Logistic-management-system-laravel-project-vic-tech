<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use McKenziearts\Notify\Facades\Notify;
use App\Mail\ContactMail;

class SupportController extends Controller
{
     public function sendEmail(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'name' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
            'name' => $request->name,
        ];

                          

        Mail::to('victech@gmail.com')->send(new ContactMail($data));
         notify()->success('Message Sent');

        return back()->with('message', 'done');
    }
}
