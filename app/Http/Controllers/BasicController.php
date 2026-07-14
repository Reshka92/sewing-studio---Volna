<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;
use App\Services\VkNotificationService;

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



public function submit(ContactRequest $request, VkNotificationService $vkService)
    {
    $message = new Message();
    $message->name = $request->input('name');
    $message->number = $request->input('number');
    $message->save();
    $adminId = config('services.vk.adminId');
    $vkService->sendNotification(
            $adminId, 
            $message->name, 
            $message->number
        );
    return redirect()->route('home')->with('success', 'Ваша заявка принята! Мы перезвоним вам в ближайшее время.');

    }

}
