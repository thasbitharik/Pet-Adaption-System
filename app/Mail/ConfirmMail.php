<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct($content_data)
    {
        $this->content_data = $content_data;

    }

   public function build()
    {
        return $this->subject('Furry Friends Forever Status')->view('email.confirm_mail');
    }
}
