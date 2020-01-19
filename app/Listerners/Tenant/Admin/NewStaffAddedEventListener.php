<?php

namespace App\Listerners\Tenant\Admin;

use App\Events\Tenant\Admin\NewStaffAddedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\Tenant\Admin\NewStaffNotification;
use Illuminate\Support\Str;
use App\Model\Tenant\Admin\AdminPasswordReset;

class NewStaffAddedEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewStaffAddedEvent  $event
     * @return void
     */
    public function handle(NewStaffAddedEvent $event)
    {
            $token = Str::random(60);
            AdminPasswordReset::create(['email'=>$event->user->email , 'token'=>$token]);
            $url = route('tenant.admin.password.reset' , $token);
    }
}
