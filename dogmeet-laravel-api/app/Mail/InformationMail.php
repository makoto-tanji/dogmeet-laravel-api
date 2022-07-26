<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformationMail extends Mailable
{
    use Queueable, SerializesModels;
    // 以下追加
    public $name;
    public $email;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $text)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('DogMeetからのお知らせ')
            ->text('emails.test')
            ->with([
                'userName' => $this->name,
                'email' => $this->email,
                'text' => $this->text,
            ]);
    }
}
