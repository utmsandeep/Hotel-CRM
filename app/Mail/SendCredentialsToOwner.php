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
    public $url;
    public function __construct($owner , $url=null)
    {
        $this->owner = $owner;
        $this->url = $url;
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
