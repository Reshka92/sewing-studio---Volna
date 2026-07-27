@extends('layouts/main')

@section('content')
<!-- Главный фон теперь полностью в глубокой фирменной синей палитке #1E295D с мягкими переливами -->
<main class="min-h-screen bg-gradient-to-b from-[#1E295D] via-[#1A2352] to-[#1E295D] text-white relative overflow-hidden">

    <!-- Фоновые декоративные свечения для придания объема темному фону -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-500/15 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-1/3 right-10 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#1E295D] via-[#2A3B82] to-[#1E295D] text-white py-24 lg:py-32 px-4 overflow-hidden border-b border-blue-800/40">
        <!-- Текстура / Фоновое изображение с наложением -->
        <div class="absolute inset-0 opacity-20 bg-cover bg-center mix-blend-overlay pointer-events-none" style="background-image: url('/images/hero-tailoring.jpg');"></div>
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-[#31469F]/40 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="container mx-auto relative z-10 max-w-4xl text-center">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-400/10 border border-blue-400/30 text-blue-300 font-medium text-xs md:text-sm mb-6 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                Профессиональное ателье в Севастополе
            </span>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
                Ателье «Волна»: <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">пошив и ремонт</span> одежды
            </h1>

            <p class="text-base md:text-xl text-blue-100/90 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                Качественный ремонт и индивидуальный пошив любой сложности на улице Острякова. Вернем любимым вещам идеальный вид за 1–3 дня.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('prices') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-8 py-4 rounded-xl transition-all duration-200 text-center shadow-lg shadow-blue-900/50 hover:shadow-blue-500/30 hover:-translate-y-0.5 border border-blue-400/30">
                    Услуги и цены
                </a>
                <a href="https://wa.me/79780403149" target="_blank" class="bg-white/10 hover:bg-white hover:text-[#1E295D] text-white font-semibold px-8 py-4 rounded-xl transition-all duration-200 text-center backdrop-blur-md border border-white/20 hover:border-white shadow-sm flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 2.17.7 4.19 1.94 5.83L2 22l4.35-1.87C7.92 21.24 9.89 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.84 0-3.55-.54-5-1.47l-.36-.23-2.58 1.11.83-2.52-.25-.38C3.65 15.02 3 13.58 3 12c0-4.97 4.03-9 9-9s9 4.03 9 9-4.03 9-9 9z"/></svg>
                    Консультация
                </a>
            </div>
        </div>
    </section>

    <!-- Преимущества / Элементы доверия (На темном фоне с тонкими светящимися иконками) -->
    <section class="py-12 border-b border-blue-800/40 relative z-20 backdrop-blur-sm bg-[#1E295D]/50">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-white/5 transition duration-300 border border-transparent hover:border-blue-400/20">
                    <div class="p-3.5 bg-blue-500/20 text-blue-300 rounded-xl border border-blue-400/30 shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg mb-1">Срочный ремонт</h3>
                        <p class="text-blue-200/70 text-sm leading-relaxed">Укоротить брюки или заменить молнию от 1 часа.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-white/5 transition duration-300 border border-transparent hover:border-blue-400/20">
                    <div class="p-3.5 bg-blue-500/20 text-blue-300 rounded-xl border border-blue-400/30 shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg mb-1">Ткани, кожа и мех</h3>
                        <p class="text-blue-200/70 text-sm leading-relaxed">Работаем с текстилем, джинсой, кожей и пальтовыми тканями.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-white/5 transition duration-300 border border-transparent hover:border-blue-400/20">
                    <div class="p-3.5 bg-blue-500/20 text-blue-300 rounded-xl border border-blue-400/30 shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg mb-1">Удобное место</h3>
                        <p class="text-blue-200/70 text-sm leading-relaxed">Севастополь, ул. Хрусталёва, 139 (свободная парковка).</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Сетка услуг -->
    <section id="services" class="py-20 px-4 relative z-10">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <span class="text-blue-400 font-bold text-xs tracking-widest uppercase mb-2 block">Наш профиль</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 tracking-tight">Что мы делаем хорошо</h2>
                <div class="w-12 h-1.5 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto rounded-full mb-4"></div>
                <p class="text-blue-100/80 max-w-md mx-auto text-sm md:text-base">От мелкого ремонта до создания уникального образа по вашим меркам.</p>
            </div>

            <!-- Карточки в стиле Glassmorphism (темные, с голубой подсветкой) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <!-- Карточка 1 -->
                <div class="group bg-[#28387A]/70 backdrop-blur-md rounded-3xl shadow-lg hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 border border-blue-400/20 hover:border-blue-400/50 flex flex-col justify-between overflow-hidden hover:-translate-y-1">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-400/30 text-blue-300 flex items-center justify-center mb-6 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0L4 4m5.121 5.121L4 14.121"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-200 transition">Ремонт одежды</h3>
                        <p class="text-blue-100/70 text-sm leading-relaxed">Подгон по фигуре, замена фурнитуры, штопка джинсов, устранение порезов на куртках.</p>
                    </div>
                    <div class="px-8 py-4 bg-[#1E295D]/60 border-t border-blue-800/50 flex justify-between items-center group-hover:bg-[#1E295D] transition">
                        <span class="text-xs font-semibold text-blue-300/60">Сроки: от 1 дня</span>
                        <a href="{{ route('prices') }}" class="text-blue-300 font-semibold text-sm hover:text-white inline-flex items-center gap-1 transition">
                            Подробнее
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Карточка 2 -->
                <div class="group bg-[#28387A]/70 backdrop-blur-md rounded-3xl shadow-lg hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 border border-blue-400/20 hover:border-blue-400/50 flex flex-col justify-between overflow-hidden hover:-translate-y-1">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-400/30 text-blue-300 flex items-center justify-center mb-6 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457-.336-2.836-.937-4.067"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-200 transition">Индивидуальный пошив</h3>
                        <p class="text-blue-100/70 text-sm leading-relaxed">Пошив платьев, костюмов, юбок и брюк по вашим эскизам или фото. Идеальная посадка по фигуре.</p>
                    </div>
                    <div class="px-8 py-4 bg-[#1E295D]/60 border-t border-blue-800/50 flex justify-between items-center group-hover:bg-[#1E295D] transition">
                        <span class="text-xs font-semibold text-blue-300/60">Сроки: от 14 дней</span>
                        <a href="{{ route('prices') }}" class="text-blue-300 font-semibold text-sm hover:text-white inline-flex items-center gap-1 transition">
                            Подробнее
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Карточка 3 -->
                <div class="group bg-[#28387A]/70 backdrop-blur-md rounded-3xl shadow-lg hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 border border-blue-400/20 hover:border-blue-400/50 flex flex-col justify-between overflow-hidden hover:-translate-y-1">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-400/30 text-blue-300 flex items-center justify-center mb-6 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-200 transition">Верхняя одежда</h3>
                        <p class="text-blue-100/70 text-sm leading-relaxed">Перекрой и ремонт пальто, кожаных курток. Замена подкладки и качественное утепление.</p>
                    </div>
                    <div class="px-8 py-4 bg-[#1E295D]/60 border-t border-blue-800/50 flex justify-between items-center group-hover:bg-[#1E295D] transition">
                        <span class="text-xs font-semibold text-blue-300/60">Сроки: от 3 дней</span>
                        <a href="{{ route('prices') }}" class="text-blue-300 font-semibold text-sm hover:text-white inline-flex items-center gap-1 transition">
                            Подробнее
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Уведомление об ограничениях (Адаптировано под темный фон) -->
            <div class="max-w-3xl mx-auto bg-amber-950/40 border border-amber-500/30 rounded-2xl p-5 flex items-start gap-4 shadow-sm backdrop-blur-md">
                <div class="p-2 bg-amber-500/20 text-amber-300 rounded-xl shrink-0 mt-0.5 border border-amber-500/30">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div>
                    <h5 class="font-bold text-amber-300 text-xs uppercase tracking-wider mb-1">Важная информация:</h5>
                    <p class="text-amber-200/90 text-sm leading-relaxed">
                        Наше ателье специализируется на классическом пошиве и ремонте. Мы <span class="font-bold underline decoration-amber-400">не принимаем</span> в работу купальники и изделия из вязаного трикотажа.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Секция формы / Оценки стоимости -->
    <section class="py-20 px-4 relative z-10 border-t border-blue-800/40">
        <!-- Блок формы в виде контрастного глубокого синего блока со свечением -->
        <div class="container mx-auto max-w-4xl bg-[#28387A]/90 backdrop-blur-md p-8 md:p-14 rounded-3xl shadow-2xl shadow-black/30 border border-blue-400/30 text-center relative">
            <span class="inline-block p-3.5 rounded-2xl bg-blue-500/20 border border-blue-400/30 text-blue-300 mb-4 shadow-sm">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </span>
            <h2 class="text-2xl md:text-4xl font-extrabold text-white mb-3 tracking-tight">Узнайте стоимость ремонта онлайн</h2>
            <p class="text-blue-100/80 mb-8 max-w-lg mx-auto text-sm md:text-base">Оставьте имя и номер телефона. Мастер перезвонит и проконсультирует по стоимости и материалам.</p>
            
            <form action="{{ route('home.post') }}" method="POST" class="max-w-md mx-auto space-y-4">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Ваше имя" class="w-full px-5 py-3.5 rounded-xl border border-blue-400/30 focus:outline-none focus:border-blue-300 focus:ring-4 focus:ring-blue-500/20 transition duration-200 text-white placeholder-blue-300/50 bg-[#1E295D]/80 shadow-inner" id="name" required>
                </div>
                <div>
                    <input type="tel" name="number" id="number" placeholder="+7 (___) ___-__-__" class="w-full px-5 py-3.5 rounded-xl border border-blue-400/30 focus:outline-none focus:border-blue-300 focus:ring-4 focus:ring-blue-500/20 transition duration-200 text-white placeholder-blue-300/50 bg-[#1E295D]/80 shadow-inner" required>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-[#31469F] hover:from-blue-500 hover:to-blue-600 text-white font-bold py-4 rounded-xl transition duration-200 shadow-lg shadow-blue-900/50 active:scale-[0.99] border border-blue-400/30">
                    Заказать обратный звонок
                </button>
            </form>
        </div>
    </section>

    <!-- Модальное окно при успешной отправке -->
    @if(session('success'))
        <div id="successModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 invisible opacity-0 transition-all duration-300">
            <div id="modalOverlay" class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
            
            <div id="modalContent" class="relative bg-[#28387A] rounded-3xl p-8 max-w-md w-full text-center shadow-2xl border border-blue-400/40 transform scale-90 transition-all duration-300 opacity-0 text-white">
                
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-2xl bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-2xl mb-5 shadow-inner">
                    ✓
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-2">Заявка принята!</h3>
                <p class="text-blue-100/80 mb-6 text-sm leading-relaxed">{{ session('success') }}</p>
                
                <button id="closeModalBtn" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3.5 px-6 rounded-xl transition shadow-md focus:outline-none border border-blue-400/30">
                    Отлично
                </button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const modal = document.getElementById('successModal');
                const content = document.getElementById('modalContent');
                const closeBtn = document.getElementById('closeModalBtn');
                const overlay = document.getElementById('modalOverlay');

                function showModal() {
                    modal.classList.remove('invisible');
                    modal.classList.add('opacity-100');
                    content.classList.remove('scale-90', 'opacity-0');
                    content.classList.add('scale-100', 'opacity-100');
                }

                function hideModal() {
                    modal.classList.remove('opacity-100');
                    modal.classList.add('opacity-0');
                    content.classList.remove('scale-100', 'opacity-100');
                    content.classList.add('scale-90', 'opacity-0');
                    
                    setTimeout(() => {
                        modal.classList.add('invisible');
                    }, 300);
                }

                setTimeout(showModal, 100);

                closeBtn.addEventListener('click', hideModal);
                overlay.addEventListener('click', hideModal);

                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') hideModal();
                });
            });
        </script>
    @endif

</main>
<div></div>
@endsection