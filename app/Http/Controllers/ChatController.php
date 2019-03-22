<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
    	return view('chat');
    }

    public function send(Request $request)
    {
    	$user = User::find(Auth::id());
    	event(new ChatEvent($user, $request->message));
    }

    // public function send()
    // {
    // 	$message = "hello...";
    // 	$user = User::find(Auth::id());
    // 	event(new ChatEvent($user, $message));
    // }
}
