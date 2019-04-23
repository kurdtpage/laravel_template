<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //needed for $request (see below)
use App\Message; //needed for db

class MessageController extends Controller
{
	public function create(Request $request){ //same as $_REQUEST[]
		$message = new Message();
		$message->title = $request->title;
		$message->content = $request->content;
		$message->save();
		return redirect('/');
	}
	public function view($messageId, $messageClass = Message){
		$message = $messageClass::findOrFail($messageId);
		//echo $message->title;
		return view('message', [
			'message' => $message
		]);
	}
}
