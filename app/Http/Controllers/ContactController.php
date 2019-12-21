<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Messege;

class ContactController extends Controller
{
    public function get()
    {
    	$contacts = User::all();
    	return response()->json($contacts);
    }
    public function getMessagesFrom($id)
    {
    	$messages = Messege::where('from', $id)->orWhere('to', $id)->get();
    	return response()->json($messages);
    }
}
