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
	public function view($id){
		$message = Message::findOrFail($id);
		//echo $message->title;
		return view('message', [
			'message' => $message
		]);
	}
}
