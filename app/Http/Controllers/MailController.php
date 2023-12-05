<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{

    public function create(){
        return view('partials._carousel');
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

    $data = [
        'subject' => $request->subject,
        'name' => $request->name,
        'email' => $request->email,
        'category' => $request->category,
        'country' => $request->country,
        'content' => $request->content
    ];

    Mail::send('/partials/email-template', $data, function($message) use ($data){
        $message->$data['email']
        ->subject($data['subject']);
    });
    return back()->with(['message' => 'Email sent successfully']);
   }
}
