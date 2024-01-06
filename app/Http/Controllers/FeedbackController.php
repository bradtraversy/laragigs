<?php

namespace App\Http\Controllers;


use App\Mail\FeedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function feed()
    {
        $subject = 'Subject';
        $body = 'message';
        Mail::to('damalide20@gmail.com')->send(new FeedMail($subject, $body));
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
        return back()->with('message', 'Email sent successfully!');

// After sending the email, redirect to the home page
            // $this->redirect(route('/index'));
    }
}
