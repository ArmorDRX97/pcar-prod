<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        print_r($notifiable);
        return TelegramMessage::create()
            ->to(env('TELEGRAM_CHAT_ID'))
            ->content($notifiable['car'])
            ->line('')
            ->line($notifiable['base_price'])
            ->line($notifiable['period'])
            ->line($notifiable['pickup_location'])
            ->line($notifiable['return_location'])
            ->line($notifiable['customer_type'])
            ->line($notifiable['customer_full_name'])
            ->line($notifiable['customer_email'])
            ->line($notifiable['customer_phone']);
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
