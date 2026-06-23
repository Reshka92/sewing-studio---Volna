@extends('layouts/main')
@section('content')
<main class="min-h-screen">

    <!-- 1. ГЛАВНЫЙ БАННЕР (Возвращаем стильный темный цвет, как в прошлый раз) -->
    <section class="relative bg-[#1E295D] text-white py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 opacity-40 bg-cover bg-center" style="background-image: url('/images/hero-tailoring.jpg');"></div>
        
        <div class="container mx-auto relative z-10 max-w-4xl text-center">
            <span class="text-blue-400 font-semibold uppercase tracking-wider text-sm block mb-3">Профессиональное ателье в Севастополе</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6">
                Ателье «Волна»: пошив и ремонт одежды
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Качественный ремонт и индивидуальный пошив одежды любой сложности на улице Хрусталёва. Вернем любимым вещам идеальный вид за 1-3 дня.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <!-- Кнопка с заливкой цвета #31469F -->
                <a href="#services" class="bg-[#31469F] hover:bg-blue-800 text-white font-medium px-8 py-4 rounded-lg transition text-center shadow-lg">
                    Услуги и цены
                </a>
                <a href="https://wa.me/79780403149" target="_blank" class="bg-transparent border border-white hover:bg-white hover:text-zinc-900 text-white font-medium px-8 py-4 rounded-lg transition text-center">
                    Консультация в WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- 2. БЛОК ПРЕИМУЩЕСТВ -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <div class="flex flex-col md:flex-row items-center gap-4 p-4">
                    <div class="p-3 bg-blue-50 text-[#31469F] rounded-full text-2xl">⚡</div>
                    <div>
                        <h3 class="font-bold text-lg">Срочный ремонт</h3>
                        <p class="text-gray-500 text-sm">Укоротить брюки или заменить молнию от 1 часа.</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-4 p-4">
                    <div class="p-3 bg-blue-50 text-[#31469F] rounded-full text-2xl">🧵</div>
                    <div>
                        <h3 class="font-bold text-lg">Ткани, кожа и мех</h3>
                        <p class="text-gray-500 text-sm">Работаем с текстилем, джинсой, кожей и пальтовыми тканями.</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-4 p-4">
                    <div class="p-3 bg-blue-50 text-[#31469F] rounded-full text-2xl">📍</div>
                    <div>
                        <h3 class="font-bold text-lg">Удобное место</h3>
                        <p class="text-gray-500 text-sm">Севастополь, ул. Хрусталёва, 139 (свободная парковка).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. НАПРАВЛЕНИЯ РАБОТЫ -->
    <section id="services" class="py-20 bg-gray-50 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Что мы делаем хорошо</h2>
                <p class="text-gray-500 max-w-md mx-auto">От мелкого ремонта до создания уникального образа по вашим меркам.</p>
            </div>

            <!-- Сами 3 плашки -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Карточка 1 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden border border-gray-100 flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-3xl mb-4">✂️</div>
                        <h3 class="text-xl font-bold mb-2">Ремонт одежды</h3>
                        <p class="text-gray-600 text-sm mb-4">Подгон по фигуре, замена фурнитуры, штопка джинсов, устранение порезов на куртках.</p>
                    </div>
                    <div class="px-6 pb-6 pt-2 bg-gray-50 flex justify-between items-center">
                        <span class="text-gray-500 text-xs">Сроки: от 1 дня</span>
                        <a href="#" class="text-[#31469F] font-medium text-sm hover:underline">Подробнее →</a>
                    </div>
                </div>

                <!-- Карточка 2 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden border border-gray-100 flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-3xl mb-4">🪡</div>
                        <h3 class="text-xl font-bold mb-2">Индивидуальный пошив</h3>
                        <p class="text-gray-600 text-sm mb-4">Пошив платьев, костюмов, юбок и брюк по вашим эскизам или фото. Идеальная посадка по фигуре.</p>
                    </div>
                    <div class="px-6 pb-6 pt-2 bg-gray-50 flex justify-between items-center">
                        <span class="text-gray-500 text-xs">Сроки: от 14 дней</span>
                        <a href="#" class="text-[#31469F] font-medium text-sm hover:underline">Подробнее →</a>
                    </div>
                </div>

                <!-- Карточка 3 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden border border-gray-100 flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-3xl mb-4">🧥</div>
                        <h3 class="text-xl font-bold mb-2">Работа с верхней одеждой</h3>
                        <p class="text-gray-600 text-sm mb-4">Перекрой и ремонт пальто, кожаных курток. Замена подкладки и утепление.</p>
                    </div>
                    <div class="px-6 pb-6 pt-2 bg-gray-50 flex justify-between items-center">
                        <span class="text-gray-500 text-xs">Сроки: от 3 дней</span>
                        <a href="#" class="text-[#31469F] font-medium text-sm hover:underline">Подробнее →</a>
                    </div>
                </div>
            </div>

            <!-- НАДПИСЬ-ПРЕДУПРЕЖДЕНИЕ ТЕПЕРЬ ТУТ (ПОД ТРЕМЯ ПЛАШКАМИ) -->
            <div class="max-w-2xl mx-auto bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3 shadow-sm">
                <span class="text-xl">⚠️</span>
                <div>
                    <h5 class="font-bold text-amber-900 text-sm uppercase tracking-wider mb-1">Обратите внимание:</h5>
                    <p class="text-amber-800 text-sm">
                        Наше ателье специализируется на классическом пошиве и ремонте. Мы <span class="font-semibold underline">не принимаем</span> в работу купальники и изделия из вязаного трикотажа.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. ЛИД-ФОРМА -->
    <section class="py-20 bg-blue-50/50 px-4">
        <div class="container mx-auto max-w-3xl bg-white p-8 md:p-12 rounded-2xl shadow-xl border border-blue-100 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Узнайте стоимость ремонта онлайн</h2>
            <p class="text-gray-600 mb-8">Опишите, что нужно сделать. Мы проконсультируем вас по цене и материалам.</p>
            
            
            
            
            
            
            <form action="{{ route('home.post')}}" method="POST" class="max-w-md mx-auto space-y-4">
                @csrf
                <input type="text" placeholder="Ваше имя" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:border-[#31469F] transition" id="name">
                <input type="tel" id="number" placeholder="+7 (___) ___-__-__" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:border-[#31469F] transition">
                <button type="submit" class="w-full bg-[#31469F] hover:bg-blue-800 text-white font-bold py-3 rounded-lg transition shadow-md">
                    Перезвонить мне
                </button>
            </form>
        </div>
    </section>

</main>
@endsection