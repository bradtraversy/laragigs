<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function mail()
    {
        $subject = 'Subject';
        $body = 'Message';
        Mail::to('damalide20@gmail.com')->send(new TestEmail($subject, $body));
        // Mail::to('sharnoor0020@gmail.com')
        //     ->from('damalide20@gmail.com', 'Dante Mwangi | Web Admin')
        //     ->send(new TestEmail($subject, $body));
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'content' => 'required',
            'country' => 'required',
            'category' => 'required',
        ]);

        $body = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'category' => $request->category,
            'country' => $request->country,
            'content' => $request->content,
        ];

        Mail::send('send-email-template', $body, function ($message) use ($body) {
            $message->$body['email']->subject($body['subject']);
        });
        return back()->with(['message' => 'Email sent successfully']);
    }
}
