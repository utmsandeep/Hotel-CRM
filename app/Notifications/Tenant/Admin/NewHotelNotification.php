<?php

namespace App\Notifications\Tenant\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Mail\Tenant\Admin\NewHotelMail;
use Mail;

class NewHotelNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    //public $hotel;
    public function __construct()
    {
        //$this->hotel = $hotel;
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
        Mail::to($notifiable->email)->send(new NewHotelMail($notifiable));
        // Mail::to($notifiable->generalManager->email)->send(new NewHotelMail($notifiable->name));
        // Mail::to($notifiable->DirectorOfSales->email)->send(new NewHotelMail($notifiable->name));
        // Mail::to($notifiable->Coordinator->email)->send(new NewHotelMail($notifiable->name));
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
