<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index(){
        return view('chat.index');
    }

    public function send(Request $request) {
        event(
            new Message(
                auth()->user()->username, 
                $request->message
            ));
        return ['status'=>true];   
    }
}
