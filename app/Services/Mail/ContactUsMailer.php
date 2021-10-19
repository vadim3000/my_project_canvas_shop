<?php

namespace App\Services\Mail;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;




class ContactUsMailer{

    private Mailer $infrastructureMailer;

    public function __construct(Mailer $mailer)
    {
        $this->infrastructureMailer = $mailer;
    }


    public function send(array $data): void
    {
        $data['messageText'] = $data['message'];

        $this->infrastructureMailer->send(
            'emails/contactUs',
            $data,
            function (Message $message) use ($data) {
                $message->to('test@test.com');
                $message->subject('Contact Us request from'. $data['name'] . ' ' . $data['email']);
                $message->replyTo($data['email']);
            }
        );

    }

}
