<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ServiceMail;

class MailController extends Controller
{
    public function sendContactMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'subjects' => 'required|string',
            'messages' => 'required|string',
        ]);

        Mail::to('devitaliya0@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->mobile,
            $request->machine_type,
            $request->subjects,
            $request->messages 
        ));
        return response()->json(['success' => 'Message sent successfully!']);
    }

    public function sendServiceMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'messages' => 'required|string',
        ]);

        Mail::to('devitaliya0@gmail.com')->send(new ServiceMail(
            $request->name,
            $request->email,
            $request->mobile,
            $request->machine_type,
            $request->messages 
        ));
        return response()->json(['success' => 'Message sent successfully!']);
    }
}
