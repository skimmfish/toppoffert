<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendApprovalMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $f_name;
    protected $title;
    protected $no_of_coy;

    public function __construct($fname,$title,$no_of_coy)
    {
        $this->f_name=$fname;
        $this->title=$title;
        $this->no_of_coy = $no_of_coy;
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
                new Address('info@toppoffert.se', 'Abbel Ljung'),
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
            title:      $this->title,
            name:       $this->name,
            no_of_coy: $this->no_of_coy

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
