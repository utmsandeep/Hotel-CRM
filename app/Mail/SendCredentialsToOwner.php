<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCredentialsToOwner extends Mailable
{
    use Queueable, SerializesModels;
   

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $owner;
    public function __construct($owner)
    {
        $this->owner = $owner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('super_admin.emails.send-credentials-to-owner');
    }
}
