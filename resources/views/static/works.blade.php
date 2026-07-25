@extends('layouts/main')

{{-- Заголовок вкладки в браузере --}}
@section('header-title', 'Наши работы')

{{-- Основной контент страницы --}}
@section('content')
<div class="py-16 bg-[#1e295d] min-h-screen text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Шапка страницы -->
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-white sm:text-5xl tracking-tight">
                Наши выполненные работы
            </h1>
            <p class="mt-4 text-lg text-blue-200 max-w-2xl mx-auto">
                Ознакомьтесь с примерами наших проектов. Мы гарантируем качество и внимание к каждой детали.
            </p>
        </div>

        <!-- Сетка карточек -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- ================= РАБОТА 1 (Платье) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="grid grid-cols-2 gap-1 bg-gray-900 h-64 overflow-hidden relative">
                    <img src="{{ asset('images/work1.jpg') }}" alt="Фото 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/work1-1.jpg') }}" alt="Фото 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                       Платье индивидуального покроя
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Индивидуальный пошив элегантного платья. Идеальная посадка по фигуре.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 14 дней</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив платья</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 2 (Платье) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work5.jpg') }}" alt="Работа" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Платье вечернее из атласа
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaЫxed">
                        Легкое, воздушное повседневное платье. Свободный крой, не стесняющий движений, и нежная дышащая подкладка.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 4 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив платья</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 3 (Юбка) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work3.jpg') }}" alt="Работа" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Декор одежды
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Декор одежды по пожеланиям клиента.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 3 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив юбки</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 4 (Юбка) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="grid grid-cols-2 gap-1 bg-gray-900 h-64 overflow-hidden relative">
                    <img src="{{ asset('images/work2.jpg') }}" alt="Фото 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/work2-2.jpg') }}" alt="Фото 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Стильная юбка
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Держит форму после стирок и подчеркивает силуэт.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 4 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив юбки</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 5 (Блуза) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work13.jpg') }}" alt="Главное фото" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Шелковая блуза с объемными рукавами
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Утонченная блуза свободного кроя с изящными манжетами. Добавит нежности и стиля как строгому костюму, так и повседневным джинсам.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 3 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив блузы</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 6 (Жилет) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work4.jpg') }}" alt="Работа" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Удлиненный классический жилет
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Строгий жилет из искусственого меха по задумке клиента. Отлично садится по фигуре, держит четкую линию плеч и дополняет многослойные образы.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 4 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив жилета</span>
                    </div>
                </div>
            </div> 


            <!-- ================= РАБОТА 7 (Платье) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="grid grid-cols-2 gap-1 bg-gray-900 h-64 overflow-hidden relative">
                    <img src="{{ asset('images/work7.jpg') }}" alt="Фото 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/work7-7.jpg') }}" alt="Фото 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Летнее платье
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Летнее платье в романтическом образе, выгодно подчеркивающей достоинства фигуры.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 6 дней</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив платья</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 8 (Куртка) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="grid grid-cols-2 gap-1 bg-gray-900 h-64 overflow-hidden relative">
                    <img src="{{ asset('images/work9.jpg') }}" alt="Фото 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/work9-9.jpg') }}" alt="Фото 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                         Джинсовая куртка
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Пошив куртки из плотного 100% хлопка (деним) оверсайз кроя.Прочные джинсовые швы и удобные карманы.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 8 дней</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Джинсовая куртка</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 9 (Платье) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work8.jpg') }}" alt="Работа" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Вечерние платье
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                       Вечерние платье белого цвета, идельно подчеркивающие фигуру клиента.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 5 дней</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив платья</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 10 (Платье) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="grid grid-cols-2 gap-1 bg-gray-900 h-64 overflow-hidden relative">
                    <img src="{{ asset('images/work14.jpg') }}" alt="Фото 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/work14-14.jpg') }}" alt="Фото 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Летнее льняное платье
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Уютное платье из мягкого качественного льна. Отлично переносит повседневную носку, жару не вытягивается и сохраняет цвет.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 4 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив платья</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 11 (Декорация одежды) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work30.jpg') }}" alt="Главное фото" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Вечернее платье
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Вечернее платье эксклюзивного пошива, с открытой спиной.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 3 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Декор одежды</span>
                    </div>
                </div>
            </div>


            <!-- ================= РАБОТА 12 (Юбка) ================= -->
            <div class="bg-[#151c42] rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 border border-blue-900/50 overflow-hidden flex flex-col group">
                <div class="h-64 overflow-hidden bg-gray-900">
                    <img src="{{ asset('images/work15.jpg') }}" alt="Работа" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                        Юбка макси
                    </h3>
                    <p class="mt-3 text-sm text-blue-100 flex-grow leading-relaxed">
                        Юбка макси с разрезом по боку.
                    </p>
                    <div class="mt-6 pt-4 border-t border-blue-900/40 flex justify-between items-center text-xs text-blue-300/70">
                        <span>🗓️ Срок: 3 дня</span>
                        <span class="font-medium text-blue-400 bg-blue-950 px-2.5 py-1 rounded-md border border-blue-800/50">Пошив юбки</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection