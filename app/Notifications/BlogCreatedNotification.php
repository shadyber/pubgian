<?php

namespace App\Notifications;

use App\Broadcasting\DatabaseChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BlogCreatedNotification extends Notification
{
    use Queueable;
    private $blog;
    private $user;


    /**
     * Create a new notification instance.
     */
    public function __construct($blog)
    {
        $this->blog = $blog;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [DatabaseChannel::class,'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Hi  ,'.$notifiable->name)
                    ->line('New Blog Post Is created ')

                    ->action('Click to Read ', url('/blog/'.$this->blog->id))

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
            'title' => 'Blog Created',
            'body'  => 'Hi ,' . $this->user->name . '!',
        ];
    }
}
