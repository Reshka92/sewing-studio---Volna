<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title', 'Швейное ателье Волна') | Ремонт и пошив одежды Севастополь</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="font-roboto bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="sticky top-0 z-50 w-full bg-gradient-to-r from-[#1E295D] via-[#28387A] to-[#1E295D] backdrop-blur-md text-white shadow-xl border-b border-blue-400/20 transition-all"> 
        <!-- Добавлен класс relative для точного позиционирования центрального меню -->
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8 py-3.5 relative">
            
            <!-- Логотип с дескриптором (Левая часть) -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group shrink-0 z-10">
                <div class="w-10 h-10 rounded-xl bg-blue-500/20 flex items-center justify-center border border-blue-400/30 shadow-inner group-hover:bg-blue-500/30 group-hover:scale-105 transition duration-300">
                    <svg class="w-5 h-5 text-blue-300 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-black text-2xl tracking-wider text-white group-hover:text-blue-200 transition leading-none">ВОЛНА</span>
                    <span class="text-[10px] uppercase tracking-widest text-blue-300/80 font-semibold mt-1">Швейное ателье</span>
                </div>
            </a>
            
            <!-- Навигация (СТРОГО ПО ЦЕНТРУ за счет absolute и translate) -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-xl text-base font-medium transition duration-200 {{ request()->routeIs('home') ? 'bg-blue-500/30 text-white font-semibold shadow-sm border border-blue-400/30' : 'text-blue-100 hover:bg-white/10 hover:text-white' }}">
                    Главная
                </a>
                <a href="{{ route('about') }}" class="px-4 py-2 rounded-xl text-base font-medium transition duration-200 {{ request()->routeIs('about') ? 'bg-blue-500/30 text-white font-semibold shadow-sm border border-blue-400/30' : 'text-blue-100 hover:bg-white/10 hover:text-white' }}">
                    О нас
                </a>
                <a href="{{ route('works') }}" class="px-4 py-2 rounded-xl text-base font-medium transition duration-200 {{ request()->routeIs('works') ? 'bg-blue-500/30 text-white font-semibold shadow-sm border border-blue-400/30' : 'text-blue-100 hover:bg-white/10 hover:text-white' }}">
                    Работы
                </a>
                <a href="{{ route('prices') }}" class="px-4 py-2 rounded-xl text-base font-medium transition duration-200 {{ request()->routeIs('prices') ? 'bg-blue-500/30 text-white font-semibold shadow-sm border border-blue-400/30' : 'text-blue-100 hover:bg-white/10 hover:text-white' }}">
                    Цены
                </a>
                <a href="{{ route('contacts') }}" class="px-4 py-2 rounded-xl text-base font-medium transition duration-200 {{ request()->routeIs('contacts') ? 'bg-blue-500/30 text-white font-semibold shadow-sm border border-blue-400/30' : 'text-blue-100 hover:bg-white/10 hover:text-white' }}">
                    Контакты
                </a>
            </nav>
            
            <!-- Контакты, режим работы и CTA-кнопка (Правая часть) -->
            <div class="flex items-center gap-5 z-10">
                
                <!-- Телефон и адрес -->
                <div class="hidden sm:flex flex-col text-right">
                    <a href="tel:+79780403149" class="font-extrabold text-lg tracking-tight text-white hover:text-blue-300 transition block leading-none">
                        +7 978 040-31-49
                    </a>
                    <div class="flex items-center justify-end gap-2 mt-1.5 text-xs text-blue-200/90 font-light">
                        
                        
                        <span class="flex items-center gap-1">
                            <svg class="w-3 h-3 text-blue-300 inline-block shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            ул. Острякова, 244
                        </span>
                    </div>
                </div>

                <!-- Кнопка призыва к действию (CTA) для десктопа -->
                <a href="{{ route('contacts') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-sm font-bold text-[#1E295D] bg-gradient-to-r from-blue-100 to-white hover:from-white hover:to-blue-50 rounded-xl shadow-lg hover:shadow-blue-500/20 transition duration-200 transform hover:-translate-y-0.5 shrink-0">
                    Записаться
                </a>

                <!-- Кнопка мобильного меню (бургер) -->
                <button type="button" class="md:hidden p-2.5 rounded-xl bg-white/10 text-white hover:bg-white/20 border border-white/15 focus:outline-none transition" aria-label="Открыть меню">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

            </div>

        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

</body>
</html>