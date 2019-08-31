<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactInquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contact_inquiry_data = $this->data;

        return $this->from($this->data['email'], $this->data['first_name'] . " " . $this->data['last_name'])
                    ->view('email.contact-inquiry')->with('contact_inquiry_data', $contact_inquiry_data);
    }
}
