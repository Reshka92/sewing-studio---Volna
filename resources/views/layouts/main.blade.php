@extends('layouts/main')

{{-- Заголовок вкладки в браузере --}}
@section('header-title', 'Наши работы / Сообщения')

{{-- Основной контент страницы --}}
@section('content')
<div class="py-12 bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Заголовок на странице -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-gray-950 sm:text-4xl">
                Список полученных заявок
            </h1>
            <p class="mt-2 text-sm text-gray-500">
                Всего найдено записей в базе данных: {{ $messages->count() }}
            </p>
        </div>

        <!-- Список карточек -->
        <div class="space-y-4">
            @foreach($messages as $message)
                <div class="bg-white shadow-sm hover:shadow-md transition rounded-xl border border-gray-200 p-6 flex justify-between items-center">
                    
                    <div>
                        <!-- Выводим Имя клиента -->
                        <h3 class="text-lg font-bold text-[#31469F] flex items-center gap-2">
                            <span>👤</span> {{ $message->name ?? 'Без имени' }}
                        </h3>
                        
                        <!-- Выводим Номер -->
                        <p class="mt-2 text-sm font-medium text-gray-600 flex items-center gap-2">
                            <span class="text-gray-400">📞 Номер:</span> 
                            <span class="text-gray-900 font-semibold">{{ $message->number }}</span>
                        </p>
                    </div>

                    <!-- ID записи в углу -->
                    <span class="text-xs font-semibold text-gray-400 bg-gray-100 px-3 py-1.5 rounded-lg border border-gray-200">
                        ID: {{ $message->id }}
                    </span>

                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection