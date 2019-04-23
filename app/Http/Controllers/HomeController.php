<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; //added for accessing db. "messages' is the table name

class HomeController extends Controller
{
  public function index($messageClass = Message){
		$messages = $messageClass::all(); //get all messages
		return view('home', [
			'messages' => $messages
		]); //show homepage and pass messages in
	}
}
