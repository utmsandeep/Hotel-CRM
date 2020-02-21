<?php

namespace App\Mail\Tenant\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PerposalRoomPriceChangedAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $detail;
    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('tenant.mails.admin.perposal-room-price-changed-admin')
                     ->with([
                        "perposal"  =>$this->detail['perposal'],
                        "url"       =>$this->detail['url']
                    ]);
    }
}
