<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class MailController extends Controller
{
    public static function send(){
        Mail::to('asememad984@gmail.com')->send(new SendMail);
        if(session('from_arabic')){
            return view('indexAr');
        }
        else{
            return view('indexEn');
        }
    }
}
