<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title', 'Ателье Волна')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="font-roboto bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="sticky top-0 z-40 w-full bg-[#31469F]/95 backdrop-blur-md text-white shadow-lg transition-all border-b border-blue-800/40"> 
        <div class="container mx-auto flex items-center justify-between px-4 py-3.5">
            
            <!-- Логотип -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center border border-white/20 group-hover:bg-white/20 transition">
                    <svg class="w-5 h-5 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span class="font-black text-2xl tracking-wider text-white group-hover:text-blue-100 transition">ВОЛНА</span> 
            </a>
            
            <!-- Навигация -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-md text-sm font-medium hover:bg-white/10 hover:text-blue-100 transition {{ request()->routeIs('home') ? 'bg-white/15 text-white font-semibold' : 'text-blue-50' }}">Главная</a>
                <a href="{{ route('about') }}" class="px-4 py-2 rounded-md text-sm font-medium text-blue-50 hover:bg-white/10 hover:text-blue-100 transition">О нас</a>
                <a href="{{ route('works') }}" class="px-4 py-2 rounded-md text-sm font-medium text-blue-50 hover:bg-white/10 hover:text-blue-100 transition">Работы</a>
                <a href="{{ route('prices') }}" class="px-4 py-2 rounded-md text-sm font-medium text-blue-50 hover:bg-white/10 hover:text-blue-100 transition">Цены</a>
                <a href="{{ route('contacts') }}" class="px-4 py-2 rounded-md text-sm font-medium text-blue-50 hover:bg-white/10 hover:text-blue-100 transition">Контакты</a>
            </nav>
            
            <!-- Контакты -->
            <div class="text-right">
                <a href="tel:+79780403149" class="font-bold text-lg tracking-tight text-white hover:text-blue-200 transition block leading-tight">
                    +7 978 040-31-49
                </a>
                <span class="text-xs text-blue-200/90 flex items-center justify-end gap-1">
                    <svg class="w-3 h-3 inline-block opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    ул. Хрусталёва, 139
                </span>
            </div>

        </div>
    </header>

    <div class="flex-grow">
        @yield('content')
    </div>

</body>
</html>