<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Ticketpurchased extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $purchase;
    public $webChargeforBuyer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $purchase,$webChargeforBuyer)
    {
        $this->data = $data;
        $this->purchase = $purchase;
        $this->webChargeforBuyer = $webChargeforBuyer;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Congratulations!!! You have successfully purchased the tickets for the Event '.$this->data->event_name,
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
            markdown: 'emails.buyer.ticket.purchased',
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
