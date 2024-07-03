<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $name;
    public $email;
    public $subject;
    public $messagess;

    public function __construct($name, $email, $subject, $messagess)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->messagess = $messagess;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->view('admin_email')
            ->subject($this->subject);
    }
}
