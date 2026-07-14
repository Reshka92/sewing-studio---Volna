<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VkNotificationService
{
    protected string $token;
    protected string $version = '5.131';
    public function __construct()
    {
        $this->token = config('services.vk.token');
    }
    
    public function sendNotification(string $userId, string $name, string $phone): bool
    {
        $message = "Клиент: $name просит вас перезвонить ему по номеру $phone";
        $response = Http::get('https://api.vk.com/method/messages.send', [
            'user_id' => $userId,
            'message' => $message,
            'random_id'=> rand(0, 999999), 
            'access_token' => $this->token,
            'v' => $this->version,
        ]);
    
            if ($response->successful() && !isset($response->json()['error'])) {
                return true;
            }
            Log::error('Ошибка отправки уведомления в ВК: ' . $response->body());
            return false;
}
}
