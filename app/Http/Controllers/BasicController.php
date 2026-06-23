<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;
class BasicController extends Controller
{
    
public function index()
{
    return view('static.home');
}
public function submit(ContactRequest $request)
{
    $message = new Message();
    $message->name = $request->input('name');
    $message->number = $request->input('number');
    $message->save();
}
}
