<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    /**
     * @var \App\Contact
     */
    protected $contact;

    /**
     * Create a new message instance.
     *
     * @param \App\Contact $contact
     */
    public function __construct(\App\Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('PascalCoin: New Contact Message')
            ->text('mail.contact',  ['contact' => $this->contact]);
    }
}
