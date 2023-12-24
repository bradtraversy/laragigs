<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class YourEmailMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // You can pass data to your email template

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Subject of the Email')
                    ->view('emails.email-template'); // Blade view file for your email
    }
}
