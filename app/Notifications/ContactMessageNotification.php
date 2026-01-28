<?php

namespace App\Notifications;

use App\Filament\Resources\ContactMessageResource;
use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public ContactMessage $contactMessage)
    {
        //
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $parts = explode(' ', trim($notifiable->name));
        $name = ! empty($parts[0]) ? $parts[0] : 'there';

        return (new MailMessage)
            ->greeting("Hello Mr/Ms. {$name},")
            ->subject('New Contact Message: ' . $this->contactMessage->subject)
            ->line('You have received a new contact message.')
            ->line('From: ' . $this->contactMessage->name . ' (' . $this->contactMessage->email . ')')
            ->line('Subject: ' . $this->contactMessage->subject)
            ->line('Message:')
            ->line($this->contactMessage->message)

            //  NOTE: we don't have a view route since it opens in a modal dialog
            ->action('View Messages', ContactMessageResource::getUrl('index'))
            ->salutation(new HtmlString('Regards,<br>Assesk Team'));
    }

    public function toArray(object $notifiable): array
    {
        return [
            'contact_message_id' => $this->contactMessage->id,
        ];
    }
}
