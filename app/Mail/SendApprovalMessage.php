<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class SendApprovalMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $f_name;
    protected $request_title;
    protected $no_of_coy;
    protected $psw;
    protected $email;

    public function __construct($fname,$request_title,$no_of_coy,$email,$password)
    {
        $this->f_name=$fname;
        $this->request_title=$request_title;
        $this->no_of_coy = $no_of_coy;
        $this->psw = $password;
        $this->email = $email;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('info@toppoffert.se',config('app.name')),
            replyTo: [
                new Address('info@toppoffert.se', config('app.name')),
            ],
            subject: 'Tack för att du ansluter'    
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
            markdown: 'sendapprovalmessage',
            with: [
            'title' =>     $this->request_title,
            'f_name' =>    $this->f_name,
            'no_of_coy' => $this->no_of_coy,
            'ur_email' =>  $this->email,
            'ur_pass' =>   $this->psw,
            'url'=>        'https://toppoffert.se/se/home/login'
            ]);
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
