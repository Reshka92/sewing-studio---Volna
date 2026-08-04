<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * Имя команды для вызова в терминале.
     */
    protected $signature = 'sitemap:generate';

    /**
     * Описание команды.
     */
    protected $description = 'Сгенерировать файл sitemap.xml для сайта';

    public function handle()
    {
        // Укажите URL вашего реального сайта
        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap успешно сгенерирован!');
    }
}