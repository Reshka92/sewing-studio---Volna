<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\MessageController;


use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


Route::get('/', [BasicController::class, 'index'])->name('home');
Route::post('/', [BasicController::class, 'submit'])->name('home.post');
Route::get('/about', [BasicController::class, 'about'])->name('about');
// Route::get('/works', [BasicController::class, 'works'])->name('works');
Route::get('/works', [MessageController::class, 'index'])->name('works');


Route::get('/contacts', [BasicController::class, 'contacts'])->name('contacts');
Route::get('/prices', [BasicController::class, 'prices'])->name('prices');


Route::get('/generate-sitemap', function () {
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

    // Список ваших страниц
    $urls = [
        '/',
        '/about',
        '/contacts',
        '/prices',
        '/works',
    ];

    $domain = 'https://memoboost.ru.swtest.ru';

    foreach ($urls as $url) {
        $xml .= '  <url>' . PHP_EOL;
        $xml .= '    <loc>' . $domain . $url . '</loc>' . PHP_EOL;
        $xml .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
        $xml .= '    <priority>0.8</priority>' . PHP_EOL;
        $xml .= '  </url>' . PHP_EOL;
    }

    $xml .= '</urlset>';

    // Сохраняем файл в папочку public
    file_put_contents(public_path('sitemap.xml'), $xml);

    return 'Готово! Карта сайта успешно создана.';
});