<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class stockLevel extends Notification
{
    use Queueable;

    private $level;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($level)
    {
        $this->level=$level;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url=url(route('admin.showstock')."?stockId=".$this->level['stock_id']);
        return (new MailMessage)
                    ->subject('Nivel de stock '.$this->level['level'])
                    ->greeting('¡Atención!')
                    ->line('El producto '.$this->level['product'].' se está agotando.')
                    ->action('Ver producto', $url)
                    ->salutation('Mensaje del sistema de '.env('APP_NAME','Laravel'));
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
            'stock_id' => $this->level['stock_id'],
            'product' => $this->level['product'],
            'level' => $this->level['level'],
            'resource' => url(route('admin.showstock')."?stockId=".$this->level['stock_id'])
        ];
    }
}
