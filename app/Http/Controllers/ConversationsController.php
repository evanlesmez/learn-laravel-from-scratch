<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;

class ConversationsController extends Controller
{
    function store (){
        // persist to database
    }

    function index () {
        return view('conversations.index', [
            'conversations' => Conversation::all()
        ]);
    }
    
    function show (Conversation $conversation) {
        // database match request conversation id 
        return view('conversations.show', [
            'conversation'=> $conversation
        ]);
        // return view with one conversation
    }
}
