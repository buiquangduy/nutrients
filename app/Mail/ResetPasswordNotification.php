<?php

namespace App\Mail;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Queue\SerializesModels;


class ResetPasswordNotification extends ResetPassword
{
    use Queueable, SerializesModels;

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->view('layouts.mail_forgot_password', [
                'url' => url(url()->current().route('password.reset', $this->token, false)),
                'name' => $notifiable->name
            ])
            ->subject('Test Subject');
    }
}
