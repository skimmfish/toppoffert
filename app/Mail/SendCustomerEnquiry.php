<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class SendCustomerEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $message;
     protected $name;
     protected $reply_email;
    protected $phone;
     public function __construct($msg,$name,$reply_email,$phone)
    {
        $this->message = $msg;
        $this->name = $name;
        $this->reply_email = $reply_email;
        $this->phone = $phone;
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
                    new Address($this->reply_email,$this->name),
                ],
    
            subject: 'Skicka kundförfrågan',
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
            markdown: 'emails.sendcustomerenquiry',
            with: [
                'msg' => $this->message,
                'name' => $this->name,
                'reply_email'=>$this->reply_email,
                'phone'=>$this->phone
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
