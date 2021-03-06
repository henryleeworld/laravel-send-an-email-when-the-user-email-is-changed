<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject( __('User Email Changed'))->view('mail.userchangedemail');
    }
}
