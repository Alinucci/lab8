<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }
    public function sendEmail(Request $request){
        $detalis = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone
        ];
        Mail::to('groznyi.alik@gmail.com')->send(new ContactMail($detalis));
        return back()->with('message sent', 'Your information has been sent successfully!');
    }
}
