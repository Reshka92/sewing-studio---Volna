<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;
class BasicController extends Controller
{
    
public function index()
{
    return view('static.home');
}
public function about()
{
    return view('static.about');
}
public function contacts()
{
    return view('static.contacts');
}
public function prices()
{
    return view('static.prices');
}
public function works()
{
    return view('static.works');
}

public function submit(ContactRequest $request)
    {
    $message = new Message();
    $message->name = $request->input('name');
    $message->number = $request->input('number');
    $message->save();
    return redirect()->route('home');
    }
}
