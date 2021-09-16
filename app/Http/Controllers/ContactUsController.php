<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactUsRequest;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;



class ContactUsController extends Controller
{

    public function contactUs(Request $request)
    {
        return view('pages.contact-us');
    }


    public function storeContactInfo( ContactUsRequest $request, Mailer  $mailer)
    {
        $data = $request->validated();

        $mailer->send($data);

        return redirect(route('contact.show'))
            ->with('success', 'Mesajul a fost trimis cu sucess')
            ->withInput($data);
    }

}
