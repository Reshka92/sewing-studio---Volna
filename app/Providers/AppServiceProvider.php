<?php 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Принудительно включаем HTTPS для всех сгенерированных ссылок (Vite, route, asset)
        URL::forceScheme('https');
        
        // Помогаем Laravel понять, что запрос пришел через HTTPS-прокси хостинга
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            URL::forceScheme('https');
        }
    }
}