<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class RequestUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $request_scope;
    protected $f_name;
    protected $msg;
    protected $matchedSupplierCount;
    protected $request_title;
    
    public function __construct($requestScope,$f_name,$msg,$supplier_count,$request_title)
    {
        $this->request_scope=$requestScope;
        $this->f_name = $f_name;
        $this->msg = $msg;
        $this->matchedSupplierCount = $supplier_count;
        $this->request_title = $request_title;
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
            subject: 'Request Update'

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
            markdown: 'emails.requestupdate',
            with: [
                'message' => $this->msg,
                'f_name' => $this->f_name,
                'request_scope' => $this->request_scope,
                'quote_company_count'=>$this->matchedSupplierCount,
                'request_title'=>$this->request_title
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
