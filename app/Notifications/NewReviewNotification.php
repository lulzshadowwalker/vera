<?php

namespace App\Notifications;

use App\Models\Review;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewReviewNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Review $review)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return new MailMessage()
            ->subject('New Assessment Received')
            ->greeting('Hello '.$notifiable->name.',')
            ->line(
                'Your company, '.
                    $this->review->reviewedSupplier->name.
                    ', has received a new assessment.',
            )
            ->line(
                'Log in to your dashboard to view the full details and improved analytics.',
            )
            ->action('View Assessment', route('reviews.show', $this->review))
            ->line('Thank you for being part of our trusted community.');
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
