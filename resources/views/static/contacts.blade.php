@extends('layouts/main')
@section('content')
<main class="min-h-screen bg-gray-50/50 py-16 px-4">
    
    <div class="container mx-auto max-w-6xl text-center mb-16">
        <span class="text-[#31469F] font-semibold uppercase tracking-wider text-sm block mb-2">Свяжитесь с нами</span>
        <h1 class="text-4xl font-extrabold text-zinc-900 tracking-tight sm:text-5xl">
            Контакты ателье «Волна»
        </h1>
        <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto">
            Мы всегда на связи. Выберите удобный для вас способ коммуникации или приходите к нам в мастерскую.
        </p>
    </div>

    <div class="container mx-auto max-w-6xl grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="p-4 bg-sky-50 text-sky-500 rounded-xl text-2xl group-hover:bg-sky-500 group-hover:text-white transition-colors duration-300">
                        ✈️
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Наш Telegram</h3>
                        <p class="text-xs text-gray-400">Официальный канал и чат</p>
                    </div>
                </div>
                
                <p class="text-gray-600 text-sm mb-6">
                    Присоединяйтесь к нашему Telegram. Здесь мы публикуем примеры готовых работ, общаемся с клиентами и отвечаем на общие вопросы.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4 bg-slate-50 p-4 rounded-xl border border-dashed border-gray-200 mb-6">
                    <div class="w-24 h-24 bg-white p-2 rounded-lg shadow-sm border flex items-center justify-center relative overflow-hidden shrink-0">
                        <div class="text-center text-[9px] text-gray-400 font-mono">
                            <span class="text-xl block mb-0.5">📱</span>
                            [ QR-КОД ]<br>Telegram
                        </div>
                    </div>
                    <div class="text-center sm:text-left">
                        <h4 class="font-bold text-zinc-800 text-xs mb-1">Камера смартфона</h4>
                        <p class="text-[11px] text-gray-500">Наведите камеру для быстрого перехода в канал.</p>
                    </div>
                </div>
            </div>

            <a href="https://t.me/79790403149" target="_blank" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-3.5 rounded-xl transition text-center shadow-md block">
                Открыть Telegram
            </a>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="p-4 bg-indigo-50 text-indigo-500 rounded-xl text-2xl group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                        💬
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Написать Максу</h3>
                        <p class="text-xs text-gray-400">Личная консультация</p>
                    </div>
                </div>
                
                <p class="text-gray-600 text-sm mb-6">
                    Напрямую к Максу для детального обсуждения заказа. Сюда можно прислать фотографии дефектов одежды для точной оценки стоимости ремонта.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4 bg-slate-50 p-4 rounded-xl border border-dashed border-gray-200 mb-6">
                    <div class="w-24 h-24 bg-white p-2 rounded-lg shadow-sm border flex items-center justify-center relative overflow-hidden shrink-0">
                        <div class="text-center text-[9px] text-gray-400 font-mono">
                            <span class="text-xl block mb-0.5">👤</span>
                            [ QR-КОД ]<br>Maks
                        </div>
                    </div>
                    <div class="text-center sm:text-left">
                        <h4 class="font-bold text-zinc-800 text-xs mb-1">Чат с Максом</h4>
                        <p class="text-[11px] text-gray-500">Сканируйте, чтобы написать напрямую администратору.</p>
                    </div>
                </div>
            </div>

            <a href="https://wa.me/79780403149" target="_blank" class="w-full bg-[#1E295D] hover:bg-opacity-90 text-white font-bold py-3.5 rounded-xl transition text-center shadow-md block">
                Связаться с Maks
            </a>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="p-4 bg-emerald-50 text-emerald-500 rounded-xl text-2xl group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300">
                        📞
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-900">Позвонить нам</h3>
                        <p class="text-xs text-gray-400">Звонок по Севастополю</p>
                    </div>
                </div>

                <p class="text-gray-600 text-sm mb-6">
                    Есть срочный вопрос? Наберите наш номер. Мы сразу ответим, сориентируем по загруженности мастеров и текущей очереди на пошив.
                </p>

                <div class="bg-emerald-50/50 border border-emerald-100 rounded-xl p-5 text-center mb-6">
                    <span class="text-[11px] text-emerald-700 uppercase tracking-wider font-semibold block mb-1">Рабочий номер:</span>
                    <a href="tel:+79790403149" class="text-xl sm:text-2xl font-black text-emerald-600 hover:underline tracking-tight block">
                        +7 (979) 040-31-49
                    </a>
                </div>
            </div>

            <a href="tel:+79790403149" class="w-full bg-[#31469F] hover:bg-blue-800 text-white font-bold py-3.5 rounded-xl transition text-center shadow-md block">
                Позвонить сейчас
            </a>
        </div>

    </div>

    <div class="container mx-auto max-w-6xl mt-12">
        <div class="bg-[#1E295D] text-white rounded-2xl p-8 md:p-12 shadow-xl flex flex-col lg:flex-row justify-between items-center gap-8">
            
            <div class="space-y-4 text-center lg:text-left">
                <span class="text-[#1E295D] font-bold uppercase tracking-wider text-xs px-3 py-1 bg-white rounded-full inline-block">Где мы находимся</span>
                <h3 class="text-2xl md:text-3xl font-bold tracking-tight">Ждем вас в Севастополе</h3>
                <p class="text-gray-300 max-w-md text-sm md:text-base">
                    ул. Хрусталёва, 139. Возле здания находится свободная парковка — у вас не будет проблем с поиском места.
                </p>
            </div>

            <div class="w-full lg:w-auto grid grid-cols-1 sm:grid-cols-3 gap-4 shrink-0 text-center">
                <div class="bg-white/10 p-4 rounded-xl border border-white/10 backdrop-blur-sm min-w-[140px]">
                    <span class="block text-xs text-blue-300 mb-1 font-medium">Понедельник — Пятница</span>
                    <span class="font-bold text-base text-white">9:00 — 18:00</span>
                </div>
                <div class="bg-white/10 p-4 rounded-xl border border-white/10 backdrop-blur-sm min-w-[140px]">
                    <span class="block text-xs text-blue-300 mb-1 font-medium">Суббота</span>
                    <span class="font-bold text-base text-white">9:00 — 15:00</span>
                </div>
                <div class="bg-red-500/20 p-4 rounded-xl border border-red-500/30 backdrop-blur-sm min-w-[140px]">
                    <span class="block text-xs text-red-300 mb-1 font-medium">Воскресенье</span>
                    <span class="font-bold text-base text-red-400">Выходной</span>
                </div>
            </div>

        </div>
    </div>

</main>
@endsection