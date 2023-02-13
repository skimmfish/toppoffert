<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SendApprovalSuppliermessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


     protected $fname;
     protected $msg;
     protected $email;
     protected $password;
     protected $url;
     
     public function __construct($f_name,$email,$password,$url)
     {
         $this->fname = $f_name;
         $this->email = $email;
         $this->password = $password;
         $this->url = $url;
     }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Tack för Ditt Intresse',
            from: new Address('info@toppoffert.se',config('app.name')),
            replyTo: [
                new Address('info@toppoffert.se', config('app.name')),
            ],
 
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
            markdown: 'emails.sendapprovalmsg',
            with: [
                'fname' => $this->fname,
                'ur_email'=>$this->email,
                'ur_pw' => $this->password,
                'url'=>$this->url
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
