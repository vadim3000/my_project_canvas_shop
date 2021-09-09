<?php

namespace App\Http\Controllers;

//use App\Http\Request\ContactUsRequest;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;
//use Rule;


class ContactUsController extends Controller
{

    public function storeContactInfo( ContactUsRequest $request)
    {
        $data = $request->validated();
        $data['messageText'] = $data['message'];

        Mail::send(
            'emails/contactUs',
            $data,
            function (Message $message) use ($data) {
                $message->to('test@test.com');
                $message->subject('Contact Us request from'. $data['name'] . ' ' . $data['email']);
                $message->replyTo($data['email']);
            }
        );

        return redirect(route('contact.show'))
            ->with('success', 'Mesajul a fost trimis cu sucess')
            ->withInput($data);
    }

}
