<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

class ContactController extends Controller
{
    public function show () {
        return view('contact');
    }
    
    public function store () {
        request()->validate(['email' => 'required|email']);
        // Mail::raw('It works', function ($message){
        //     $message->to(request("email")) 
        //     ->subject('hello');
        //     });
        Mail::to(request('email'))
            ->send(new ContactMe("apples"));

    return redirect('/contact')
        ->with('message', 'Email sent!');
    }
}

