@extends('layouts/main')

@section('header-title', 'О нашем ателье')

@section('content')
<div class="py-16 bg-gradient-to-b from-[#1E295D] via-[#1A2352] to-[#1E295D] min-h-screen text-white relative overflow-hidden">
    
    <!-- Фоновые мягкие свечения для придания объема -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-1/3 right-10 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-2/3 -left-20 w-[400px] h-[400px] bg-sky-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Заголовок страницы -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-400/10 border border-blue-400/30 text-blue-300 font-medium text-xs md:text-sm mb-4 backdrop-blur-sm">
                Профессиональный подход
            </span>
            <h1 class="text-3xl font-extrabold text-white sm:text-5xl tracking-tight">
                О швейном ателье «Волна»
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-blue-100/80 font-light leading-relaxed">
                Специализируемся на индивидуальном пошиве, сложном ремонте и идеальной подгонке одежды по фигуре любой сложности.
            </p>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto rounded-full mt-6"></div>
        </div>

        <!-- Ключевые цифры и факты -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-8 border border-blue-400/20 shadow-2xl text-center group hover:border-blue-400/40 transition duration-300">
                <div class="text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white mb-2">
                    17+ лет
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Успешной работы</h3>
                <p class="text-xs sm:text-sm text-blue-200/70">Из них более 15 лет принимаем клиентов на одном постоянном месте.</p>
            </div>

            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-8 border border-blue-400/20 shadow-2xl text-center group hover:border-blue-400/40 transition duration-300">
                <div class="text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white mb-2">
                    20 лет
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Опыт закройщика</h3>
                <p class="text-xs sm:text-sm text-blue-200/70">В команде мастер высшей категории с опытом создания театральных костюмов.</p>
            </div>

            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-8 border border-blue-400/20 shadow-2xl text-center group hover:border-blue-400/40 transition duration-300">
                <div class="text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white mb-2">
                    100%
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Проф. оборудование</h3>
                <p class="text-xs sm:text-sm text-blue-200/70">Используем промышленные швейные машины и парогенераторы высокого класса.</p>
            </div>
        </div>

        <!-- Команда и оборудование (Блок из 2 колонок) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            
            <!-- Мастера -->
            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-8 shadow-2xl border border-blue-400/20 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-4 bg-indigo-500/20 text-indigo-300 border border-indigo-400/30 rounded-2xl text-2xl shadow-sm">
                            ✂️
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-white">Квалификация мастеров</h2>
                            <p class="text-xs text-blue-200/60">Профессионалы своего дела</p>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 text-blue-100/80 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <span class="text-blue-400 font-bold">•</span>
                            <span><strong>Профильное образование:</strong> штатные специалисты имеют среднее техническое образование по специальности «Закройщик-портной легкого платья».</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-400 font-bold">•</span>
                            <span><strong>Высшая категория:</strong> сложными заказами занимается закройщик с 20-летним стажем, имеющий колоссальный опыт работы в театральных мастерских и пошиве сценических костюмов.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-400 font-bold">•</span>
                            <span><strong>Нестандартные задачи:</strong> мы не боимся тяжелой работы. Идеально сажаем изделия на нестандартные фигуры и беремся за сложные проекты.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Оборудование и материалы -->
            <div class="bg-[#28387A]/70 backdrop-blur-md rounded-3xl p-8 shadow-2xl border border-blue-400/20 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-4 bg-sky-500/20 text-sky-300 border border-sky-400/30 rounded-2xl text-2xl shadow-sm">
                            🧵
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-white">Технологии и ткани</h2>
                            <p class="text-xs text-blue-200/60">С чем мы работаем</p>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 text-blue-100/80 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <span class="text-sky-400 font-bold">•</span>
                            <span><strong>Промышленный парк машин:</strong> идеальная строчка и работа с плотными материалами благодаря профессиональному оборудованию.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-sky-400 font-bold">•</span>
                            <span><strong>ВТО высокого уровня:</strong> влажно-тепловая обработка изделий проводится профессиональными утюгами с мощными отпаривателями.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-sky-400 font-bold">•</span>
                            <span><strong>Любые виды тканей:</strong> уверенно работаем с деликатным шелком, капризным бархатом, костюмными тканями и натуральной кожей.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Специализация (Что мы шьем) -->
        <div class="bg-[#1E295D]/80 backdrop-blur-xl border border-blue-400/30 rounded-3xl p-8 md:p-12 mb-16 shadow-2xl">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-blue-400 font-bold text-xs tracking-widest uppercase mb-2 block">Основные направления</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Широкий спектр услуг ателье</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-[#28387A]/50 p-6 rounded-2xl border border-blue-400/20">
                    <h3 class="font-bold text-white text-base mb-2 flex items-center gap-2">
                        <span>👔</span> Одежда всех типов
                    </h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Принимаем в работу женский и мужской гардероб: от легких летних платьев до строгих деловых костюмов, вечерних нарядов и верхней одежды.
                    </p>
                </div>

                <div class="bg-[#28387A]/50 p-6 rounded-2xl border border-blue-400/20">
                    <h3 class="font-bold text-white text-base mb-2 flex items-center gap-2">
                        <span>📏</span> Подгонка и ремонт
                    </h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Укорачивание, посадка по фигуре любой сложности, мелкий и крупный ремонт, реставрация одежды, а также профессиональная работа с изделиями из кожи.
                    </p>
                </div>

                <div class="bg-[#28387A]/50 p-6 rounded-2xl border border-blue-400/20">
                    <h3 class="font-bold text-white text-base mb-2 flex items-center gap-2">
                        <span>🛋️</span> Нестандартные заказы
                    </h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Помимо гардероба, мы шьем интерьерный текстиль: чехлы на диванные подушки, стулья, а также занимаемся пошивом и подгонкой штор.
                    </p>
                </div>
            </div>

            <!-- Важное ограничение -->
            <div class="mt-8 bg-amber-950/40 border border-amber-500/30 rounded-2xl p-5 flex items-start gap-4 shadow-sm">
                <div class="p-2 bg-amber-500/20 text-amber-300 rounded-xl shrink-0 mt-0.5 border border-amber-500/30">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-amber-300 text-xs uppercase tracking-wider mb-1">Обратите внимание:</h4>
                    <p class="text-amber-200/90 text-xs sm:text-sm leading-relaxed">
                        Мы стремимся гарантировать безупречное качество в нашей специализации, поэтому <strong>не берем в работу натуральный мех, купальники и изделия из вязаного трикотажа</strong>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Процесс работы (Пошаговая сетка) -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 font-medium text-xs">
                    Прозрачность и доверие
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-3">Как мы работаем с клиентом</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                
                <div class="bg-[#28387A]/70 backdrop-blur-md p-6 rounded-3xl border border-blue-400/20 relative">
                    <div class="w-10 h-10 rounded-xl bg-blue-500 text-white font-bold flex items-center justify-center mb-4 shadow-lg shadow-blue-500/30">
                        01
                    </div>
                    <h3 class="font-bold text-white mb-2 text-base">Встреча и идея</h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Вы приходите к нам с готовой вещью для ремонта или с идеей/фотографией для пошива с нуля. Мы внимательно обсуждаем задачу.
                    </p>
                </div>

                <div class="bg-[#28387A]/70 backdrop-blur-md p-6 rounded-3xl border border-blue-400/20 relative">
                    <div class="w-10 h-10 rounded-xl bg-blue-500 text-white font-bold flex items-center justify-center mb-4 shadow-lg shadow-blue-500/30">
                        02
                    </div>
                    <h3 class="font-bold text-white mb-2 text-base">Консультация</h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Закройщик советует оптимальные решения, помогает выбрать подходящую ткань, рассчитывает точный расход материала и снимает мерки.
                    </p>
                </div>

                <div class="bg-[#28387A]/70 backdrop-blur-md p-6 rounded-3xl border border-blue-400/20 relative">
                    <div class="w-10 h-10 rounded-xl bg-blue-500 text-white font-bold flex items-center justify-center mb-4 shadow-lg shadow-blue-500/30">
                        03
                    </div>
                    <h3 class="font-bold text-white mb-2 text-base">Примерки и пошив</h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Для простых моделей достаточно 1 примерки, для сложных — максимум 3. Сроки пошива с нуля составляют от 2 недель до 1 месяца.
                    </p>
                </div>

                <div class="bg-[#28387A]/70 backdrop-blur-md p-6 rounded-3xl border border-blue-400/20 relative">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white font-bold flex items-center justify-center mb-4 shadow-lg shadow-emerald-500/30">
                        04
                    </div>
                    <h3 class="font-bold text-white mb-2 text-base">Готовый результат</h3>
                    <p class="text-xs text-blue-100/70 leading-relaxed">
                        Вы примеряете готовое изделие. Если посадка идеальная и вас всё полностью устраивает — принимаете работу и оплачиваете заказ.
                    </p>
                </div>

            </div>
        </div>

        <!-- Блок постоянных клиентов и призыв к действию -->
        <div class="bg-gradient-to-r from-blue-600 via-[#2A3B82] to-indigo-600 rounded-3xl p-8 sm:p-12 shadow-2xl border border-blue-400/40 text-center relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="max-w-2xl mx-auto relative z-10">
                <span class="inline-block px-3 py-1 rounded-full bg-white/10 text-white font-semibold text-xs mb-4 backdrop-blur-md border border-white/20">
            💖 Ценим постоянство
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                    Уже более 10 лет мы радуем наших постоянных клиентов
                </h2>
                <p class="text-sm sm:text-base text-blue-100 mb-8 font-light leading-relaxed">
                    Мы гордимся тем, что клиенты возвращаются к нам годами и рекомендуют ателье друзьям. Для постоянных заказчиков у нас предусмотрена приятная система скидок и особое отношение к срочным заказам.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contacts') }}" class="bg-white text-[#1E295D] hover:bg-blue-50 font-bold px-8 py-4 rounded-xl transition shadow-lg shadow-black/20 block text-center">
                        Связаться с нами
                    </a>
                    <a href="{{ route('prices') }}" class="bg-black/20 hover:bg-black/30 text-white border border-white/30 font-semibold px-8 py-4 rounded-xl transition block text-center backdrop-blur-sm">
                        Посмотреть прейскурант
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection