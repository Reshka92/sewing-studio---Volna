@extends('layouts/main')

@section('content')
<div class="py-16 bg-gradient-to-b from-[#1E295D] via-[#1A2352] to-[#1E295D] min-h-screen text-white relative overflow-hidden">
    
    <!-- Фоновое мягкое свечение для объема -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-1/4 right-10 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Заголовок страницы -->
        <div class="text-center mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-400/10 border border-blue-400/30 text-blue-300 font-medium text-xs md:text-sm mb-4 backdrop-blur-sm">
                Прейскурант ателье «Волна»
            </span>
            <h1 class="text-3xl font-extrabold text-white sm:text-5xl tracking-tight">
                Цены на ремонт и пошив
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-blue-100/80 font-light">
                Качественный ремонт и подгонка одежды любой сложности
            </p>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto rounded-full mt-6"></div>
        </div>

        <div class="space-y-8">
            
            <!-- КАТЕГОРИЯ 1: Подгибка низа брюк -->
            <div class="bg-[#28387A]/70 backdrop-blur-md shadow-2xl rounded-3xl border border-blue-400/20 overflow-hidden transition-all duration-300">
                <div class="px-6 py-5 bg-[#1E295D]/80 border-b border-blue-800/50 flex items-center justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-white flex items-center gap-3">
                        <span class="p-2 bg-blue-500/20 rounded-xl border border-blue-400/30 text-base leading-none">👖</span>
                        Подгибка низа брюк
                    </h3>
                </div>
                <ul class="divide-y divide-blue-800/40">
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">В подгибку на машинке</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 500 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">С подшивкой вручную</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">С тесьмой и подшивкой вручную</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 700 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Трикотажных брюк</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Брюк и шорт с манжетом, разрезами</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Спортивных брюк с молнией, резинкой по низу</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 700 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Болоньевых с подкладом / на молнии</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Джинсы</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 500 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Джинсы клеш</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Джинсы с сохранением фабричного шва</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                </ul>
            </div>

            <!-- КАТЕГОРИЯ 2: Подгибка низа платья, юбки -->
            <div class="bg-[#28387A]/70 backdrop-blur-md shadow-2xl rounded-3xl border border-blue-400/20 overflow-hidden transition-all duration-300">
                <div class="px-6 py-5 bg-[#1E295D]/80 border-b border-blue-800/50 flex items-center justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-white flex items-center gap-3">
                        <span class="p-2 bg-blue-500/20 rounded-xl border border-blue-400/30 text-base leading-none">👗</span>
                        Подгибка низа платья, юбки
                    </h3>
                </div>
                <ul class="divide-y divide-blue-800/40">
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Без подклада</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">С подкладом, разрезом, шлицей</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Солнце, полусолнце</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1000 - 1200 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Трикотажные изделия</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                </ul>
            </div>

            <!-- КАТЕГОРИЯ 3: Подгибка низа других изделий -->
            <div class="bg-[#28387A]/70 backdrop-blur-md shadow-2xl rounded-3xl border border-blue-400/20 overflow-hidden transition-all duration-300">
                <div class="px-6 py-5 bg-[#1E295D]/80 border-b border-blue-800/50 flex items-center justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-white flex items-center gap-3">
                        <span class="p-2 bg-blue-500/20 rounded-xl border border-blue-400/30 text-base leading-none">🧥</span>
                        Подгибка низа других изделий
                    </h3>
                </div>
                <ul class="divide-y divide-blue-800/40">
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Жакет без подклада</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Жакет на подкладе</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1200 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Мужской пиджак (со шлицей)</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1500 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Д/с плащ</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1400 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Д/с пальто</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1500 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Пальто с утеплителем</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1500 - 1800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Плащ кожаный</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 2500 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Дубленка</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 3000 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Шуба натуральная</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 3500 ₽</span>
                    </li>
                </ul>
            </div>

            <!-- КАТЕГОРИЯ 4: Подгибка низа рукава -->
            <div class="bg-[#28387A]/70 backdrop-blur-md shadow-2xl rounded-3xl border border-blue-400/20 overflow-hidden transition-all duration-300">
                <div class="px-6 py-5 bg-[#1E295D]/80 border-b border-blue-800/50 flex items-center justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-white flex items-center gap-3">
                        <span class="p-2 bg-blue-500/20 rounded-xl border border-blue-400/30 text-base leading-none">🥢</span>
                        Подгибка низа рукава
                    </h3>
                </div>
                <ul class="divide-y divide-blue-800/40">
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Рукава без подклада</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 600 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Блуза с манжетом, на резинке</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Рукава с молнией</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Жакет без подклада</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Жакет на подкладе со шлицей, манжетом</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1000 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Куртка обычный низ</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1200 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Куртка с манжетом и резинкой</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 1200 - 1500 ₽</span>
                    </li>
                    <li class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition duration-200">
                        <span class="text-sm sm:text-base font-medium text-blue-100/90">Пальто обычный низ рукава</span>
                        <span class="text-sm font-bold text-blue-200 bg-blue-500/20 border border-blue-400/30 px-3.5 py-1.5 rounded-xl backdrop-blur-sm shadow-sm">от 800 ₽</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Дополнительная информация / Дисклеймер -->
        <div class="mt-12 text-center text-xs sm:text-sm text-blue-300/60 bg-[#28387A]/40 border border-blue-400/10 rounded-2xl p-4 backdrop-blur-sm">
            * Окончательная стоимость работ определяется мастером при приеме заказа в зависимости от сложности обработки материала.
        </div>
        
    </div>
</div>
@endsection