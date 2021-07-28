<?php

namespace App\Http\Controllers;

use App\Mail\ThankMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_mail()
    {
        $details=[
            'title' =>'Ux Qoude',
            'body' =>'Thank You Padma for Donating.'
        ];

        Mail::to("mailtesting597@gmail.com")->send(new ThankMail($details));
        return "email sent";
    }
}
