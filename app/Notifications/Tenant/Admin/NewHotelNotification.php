<?php

namespace App\Notifications\Tenant\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Mail\Tenant\Admin\NewHotelMail;
use Mail;
use Hyn\Tenancy\Environment;

class NewHotelNotification extends Notification //implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $hotel;
    public $url;
    public function __construct($hotel , $url)
    {
        $this->hotel = $hotel;
        $this->url = $url;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $hotel = $this->hotel;
        $url =  $this->url;
         return (new MailMessage)
                ->subject('New Hotel Added')
                ->markdown('tenant.mails.admin.new-hotel-added-mail' , compact('hotel' , 'url'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
