<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewSupplier extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $f_name;
    protected $msg;
    protected $email;
    protected $ur_pw;

    public function __construct($f_name,$msg,$email,$ur_pw)
    {
        $this->f_name = $f_name;
        $this->msg = $msg;
        $this->email = $email;
        $this->ur_pw = $ur_pw;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('Aluh1@hotmail.com',config('app.name')),
            replyTo: [
                new Address('hello@toppoffert.se', 'Abbel Ljung'),
            ],
            subject: 'Thank you For Connecting'
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.newsupplier',
            with: [
                'message' => $this->msg,
                'f_name' => $this->f_name,
                'ur_email'=>$this->email,
                'ur_pw' => $this->ur_pw
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
