@extends('layouts/main')

@section('content')
<div class="py-12 bg-[#1E295D] min-h-screen ">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Заголовок страницы -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
                Прейскурант цен на оказание услуг
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-white sm:mt-4">
                Качественный ремонт и подгонка одежды любой сложности
            </p>
        </div>

        <div class="space-y-8 ">
            
            <!-- КАТЕГОРИЯ 1: Подгибка низа брюк -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-100 ">
                <div class="px-4 py-5 bg-indigo-50 border-b border-indigo-100 sm:px-6">
                    <h3 class="text-lg leading-6 font-bold text-indigo-900 flex items-center">
                        <span class="mr-2">👖</span> Подгибка низа брюк
                    </h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">В подгибку на машинке</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">500 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">С подшивкой вручную</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">600 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">С тесьмой и подшивкой вручную</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">700 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Трикотажных брюк</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">600 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Брюк и шорт с манжетом, разрезами</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">600 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Спортивных брюк с молнией, резинкой по низу</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">700 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Болоньевых с подкладом / на молнии</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Джинсы</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">500 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Джинсы клеш</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">от 600 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Джинсы с сохранением фабричного шва</span>
                        <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">800 ₽</span>
                    </li>
                </ul>
            </div>

            <!-- КАТЕГОРИЯ 2: Подгибка низа платья, юбки -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-100">
                <div class="px-4 py-5 bg-purple-50 border-b border-purple-100 sm:px-6">
                    <h3 class="text-lg leading-6 font-bold text-purple-900 flex items-center">
                        <span class="mr-2">👗</span> Подгибка низа платья, юбки
                    </h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Без подклада</span>
                        <span class="text-sm font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">600 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">С подкладом, разрезом, шлицей</span>
                        <span class="text-sm font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">от 800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Солнце, полусолнце</span>
                        <span class="text-sm font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">1000 - 1200 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Трикотажные изделия</span>
                        <span class="text-sm font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">от 600 ₽</span>
                    </li>
                </ul>
            </div>

            <!-- КАТЕГОРИЯ 3: Подгибка низа других изделий -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-100">
                <div class="px-4 py-5 bg-teal-50 border-b border-teal-100 sm:px-6">
                    <h3 class="text-lg leading-6 font-bold text-teal-900 flex items-center">
                        <span class="mr-2">🧥</span> Подгибка низа других изделий
                    </h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Жакет без подклада</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Жакет на подкладе</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">1200 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Мужской пиджак (со шлицей)</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">1500 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Д/с плащ</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">от 1400 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Д/с пальто</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">от 1500 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Пальто с утеплителем</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">1500 - 1800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Плащ кожаный</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">от 2500 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Дубленка</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">от 3000 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Шуба натуральная</span>
                        <span class="text-sm font-bold text-teal-600 bg-teal-50 px-3 py-1 rounded-full">от 3500 ₽</span>
                    </li>
                </ul>
            </div>

            <!-- КАТЕГОРИЯ 4: Подгибка низа рукава -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-100">
                <div class="px-4 py-5 bg-amber-50 border-b border-amber-100 sm:px-6">
                    <h3 class="text-lg leading-6 font-bold text-amber-900 flex items-center">
                        <span class="mr-2">🥢</span> Подгибка низа рукава
                    </h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Рукава без подклада</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">600 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Блуза с манжетом, на резинке</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Рукава с молнией</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">от 800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Жакет без подклада</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">800 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Жакет на подкладе со шлицей, манжетом</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">от 1000 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Куртка обычный низ</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">1200 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Куртка с манжетом и резинкой</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">1200 - 1500 ₽</span>
                    </li>
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center hover:bg-gray-50">
                        <span class="text-sm font-medium text-gray-700">Пальто обычный низ рукава</span>
                        <span class="text-sm font-bold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">800 ₽</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Дополнительная информация/Дисклеймер -->
        <div class="mt-8 text-center text-xs text-gray-400">
            * Окончательная стоимость работ определяется мастером при приеме заказа в зависимости от сложности обработки материала.
        </div>
        
    </div>
</div>
@endsection