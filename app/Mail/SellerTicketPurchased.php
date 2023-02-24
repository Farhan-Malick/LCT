<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SellerTicketPurchased extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $purchase;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $purchase)
    {
        $this->data = $data;
        $this->purchase = $purchase;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Congratulations!!! Your '.$this->data->ticket_type.' is sold for the Event '.$this->data->event_name,
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
            markdown: 'emails.seller.ticket_purchased',
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
