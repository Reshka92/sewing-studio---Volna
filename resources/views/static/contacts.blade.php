@extends('layouts/main')

@section('content')
<div class="py-16 bg-gradient-to-b from-[#1E295D] via-[#1A2352] to-[#1E295D] min-h-screen text-white relative overflow-hidden">
    
    <!-- Фоновое мягкое свечение для объема -->
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 right-10 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Заголовок страницы -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-400/10 border border-blue-400/30 text-blue-300 font-medium text-xs md:text-sm mb-4 backdrop-blur-sm">
                Свяжитесь с нами
            </span>
            <h1 class="text-3xl font-extrabold text-white sm:text-5xl tracking-tight">
                Контакты ателье «Волна»
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-blue-100/80 font-light">
                Мы всегда на связи. Выберите удобный для вас способ коммуникации или приходите к нам в мастерскую.
            </p>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto rounded-full mt-6"></div>
        </div>

        <!-- Сетка карточек -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- КАРТОЧКА 1: Telegram -->
            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-6 shadow-2xl border border-blue-400/20 flex flex-col justify-between group hover:bg-[#28387A]/90 hover:border-blue-400/40 transition-all duration-300">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-4 bg-sky-500/20 text-sky-300 border border-sky-400/30 rounded-2xl text-2xl group-hover:scale-110 group-hover:bg-sky-500 group-hover:text-white transition-all duration-300 shadow-sm">
                            ✈️
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white">Наш Telegram</h3>
                            <p class="text-xs text-blue-200/60">Официальный канал и чат</p>
                        </div>
                    </div>
                    
                    <p class="text-blue-100/80 text-sm mb-6 leading-relaxed">
                        Присоединяйтесь к нашему Telegram. Здесь мы публикуем примеры готовых работ, общаемся с клиентами и отвечаем на общие вопросы.
                    </p>

                    <!-- Блок QR-кода (УВЕЛИЧЕН ДО w-36 h-36) -->
                    <div class="flex flex-col xl:flex-row items-center gap-4 bg-[#1E295D]/80 p-4 rounded-2xl border border-blue-400/20 mb-6 backdrop-blur-sm">
                        <div class="w-36 h-36 bg-[#1A2352] p-1.5 rounded-xl border border-blue-400/30 flex items-center justify-center shrink-0 shadow-inner">
                            <img src="{{ asset('images/qr-code-tg.png') }}" alt="QR Telegram" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="text-center xl:text-left">
                            <h4 class="font-bold text-blue-200 text-sm mb-1">Камера смартфона</h4>
                            <p class="text-xs text-blue-200/60 leading-normal">Наведите камеру для быстрого перехода в наш канал.</p>
                        </div>
                    </div>
                </div>

                <a href="https://t.me/79780403149" target="_blank" class="w-full bg-sky-500 hover:bg-sky-400 text-white font-bold py-3.5 rounded-xl transition text-center shadow-lg shadow-sky-500/30 block">
                    Открыть Telegram
                </a>
            </div>

            <!-- КАРТОЧКА 2: Написать Максу -->
            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-6 shadow-2xl border border-blue-400/20 flex flex-col justify-between group hover:bg-[#28387A]/90 hover:border-blue-400/40 transition-all duration-300">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-4 bg-indigo-500/20 text-indigo-300 border border-indigo-400/30 rounded-2xl text-2xl group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white transition-all duration-300 shadow-sm">
                            💬
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white">Написать Максу</h3>
                            <p class="text-xs text-blue-200/60">Личная консультация</p>
                        </div>
                    </div>
                    
                    <p class="text-blue-100/80 text-sm mb-6 leading-relaxed">
                        Напрямую к Максу для детального обсуждения заказа. Сюда можно прислать фотографии дефектов одежды для точной оценки стоимости ремонта.
                    </p>

                    <!-- Блок QR-кода (УВЕЛИЧЕН ДО w-36 h-36) -->
                    <div class="flex flex-col xl:flex-row items-center gap-4 bg-[#1E295D]/80 p-4 rounded-2xl border border-blue-400/20 mb-6 backdrop-blur-sm">
                        <div class="w-36 h-36 bg-[#1A2352] p-1.5 rounded-xl border border-blue-400/30 flex items-center justify-center shrink-0 shadow-inner">
                            <img src="{{ asset('images/qr-code-max1.jpg') }}" alt="QR Maks" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="text-center xl:text-left">
                            <h4 class="font-bold text-blue-200 text-sm mb-1">Чат с Максом</h4>
                            <p class="text-xs text-blue-200/60 leading-normal">Сканируйте, чтобы написать напрямую администратору.</p>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/79780403149" target="_blank" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold py-3.5 rounded-xl transition text-center shadow-lg shadow-indigo-500/30 block border border-blue-400/20">
                    Связаться с Maks
                </a>
            </div>

            <!-- КАРТОЧКА 3: Позвонить нам -->
            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-6 shadow-2xl border border-blue-400/20 flex flex-col justify-between group hover:bg-[#28387A]/90 hover:border-blue-400/40 transition-all duration-300">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-4 bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 rounded-2xl text-2xl group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300 shadow-sm">
                            📞
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white">Позвонить нам</h3>
                            <p class="text-xs text-blue-200/60">Звонок по Севастополю</p>
                        </div>
                    </div>

                    <p class="text-blue-100/80 text-sm mb-6 leading-relaxed">
                        Есть срочный вопрос? Наберите наш номер. Мы сразу ответим, сориентируем по загруженности мастеров и текущей очереди на пошив.
                    </p>

                    <div class="bg-[#1E295D]/80 border border-blue-400/20 rounded-2xl p-5 text-center mb-6 backdrop-blur-sm">
                        <span class="text-[11px] text-blue-300/80 uppercase tracking-wider font-semibold block mb-1">Рабочий номер:</span>
                        <a href="tel:+79780403149" class="text-xl sm:text-2xl font-black text-white hover:text-emerald-300 tracking-tight block transition duration-200">
                            +7 (978) 040-31-49
                        </a>
                    </div>
                </div>

                <a href="tel:+79780403149" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3.5 rounded-xl transition text-center shadow-lg shadow-emerald-600/30 block">
                    Позвонить сейчас
                </a>
            </div>

        </div>

        <!-- Нижний блок: Адрес и График работы -->
        <div class="mt-12">
            <div class="bg-[#28387A]/80 backdrop-blur-xl border border-blue-400/30 text-white rounded-3xl p-8 md:p-12 shadow-2xl flex flex-col lg:flex-row justify-between items-center gap-8">
                
                <div class="space-y-4 text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 font-medium text-xs">
                        📍 Где мы находимся
                    </span>
                    <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight text-white">Ждем вас в Севастополе</h3>
                    <p class="text-blue-100/80 max-w-md text-sm md:text-base font-light leading-relaxed">
                        ул. Острякова, 244. Возле здания находится свободная парковка — у вас не будет проблем с поиском места.
                    </p>
                </div>

                <div class="w-full lg:w-auto grid grid-cols-1 sm:grid-cols-3 gap-4 shrink-0 text-center">
                    <div class="bg-[#1E295D]/80 p-4 rounded-2xl border border-blue-400/20 backdrop-blur-sm min-w-[140px] shadow-inner">
                        <span class="block text-xs text-blue-300/80 mb-1 font-medium">Пн — Пт</span>
                        <span class="font-bold text-base text-white">9:00 — 18:00</span>
                    </div>
                    <div class="bg-[#1E295D]/80 p-4 rounded-2xl border border-blue-400/20 backdrop-blur-sm min-w-[140px] shadow-inner">
                        <span class="block text-xs text-blue-300/80 mb-1 font-medium">Суббота</span>
                        <span class="font-bold text-base text-white">9:00 — 15:00</span>
                    </div>
                    <div class="bg-red-500/20 p-4 rounded-2xl border border-red-500/30 backdrop-blur-sm min-w-[140px] shadow-inner">
                        <span class="block text-xs text-red-300 mb-1 font-medium">Воскресенье</span>
                        <span class="font-bold text-base text-red-400">Выходной</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection