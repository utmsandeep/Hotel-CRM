<?php

namespace App\Listerners;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\SendCredentialsToOwner;
use App\Events\NewBrandAddedEvent;
use Mail;

class NewBrandAddedEventListener //implements ShouldQueue
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
     * @param  NewBrandAddedEvent  $event
     * @return void
     */
    public function handle(NewBrandAddedEvent $event)
    {
        $email = $event->owner->email;
        Mail::to($email)->send(new SendCredentialsToOwner($event->owner , $event->url));
    }
}
