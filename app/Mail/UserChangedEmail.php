<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserChangedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $newValue;
    public $oldValue;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $newValue, $oldValue)
    {
        $this->user = $user;
        $this->newValue = $newValue;
        $this->oldValue = $oldValue;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('User Email Changed'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.userchangedemail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
