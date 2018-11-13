<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterVerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->data->lastname_kanji.' '.$this->data->firstname_kanji;
        if ($this->data->locale === 'en') {
            $name = $this->data->firstname_katakana.' '.$this->data->lastname_katakana;
        }

        return $this->text('layouts.mail_template')
            ->subject('NT へようこそ')
            ->with([
                'url' => $this->data->url,
                'name' => $name,
            ]);
    }
}
