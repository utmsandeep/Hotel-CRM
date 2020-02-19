<?php

namespace App\Mail\Tenant\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PerposalOtpLogin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $perposal , $hotel , $otp;
    public function __construct($perposal , $hotel , $otp)
    {
        $this->perposal = $perposal;
        $this->hotel = $hotel;
        $this->otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('tenant.mails.admin.perposal-login-otp')
                ->with([
                    "perposal"  => $this->perposal,
                    "hotel"     => $this->hotel ,
                    "otp"       =>  $this->otp
                ]);
    }
}
