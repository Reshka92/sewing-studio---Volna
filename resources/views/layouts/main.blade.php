<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body class="font-roboto bg-gray-50 text-gray-800">
    <header class="w-full bg-[#31469F] text-white shadow-md"> 
        <div class="container mx-auto flex items-center justify-between p-4">
            
            <div class="img-logo">
                <span class="font-bold text-xl tracking-wider">ВОЛНА</span> 
            </div>
            
            <div class="header-buttons flex justify-center bg-[]">
                <a href="#" class="mx-5 hover:text-blue-200 transition">Главная</a>
                <a href="#" class="mx-5 hover:text-blue-200 transition">О нас</a>
                <a href="#" class="mx-5 hover:text-blue-200 transition">Работы</a>
                <a href="#" class="mx-5 hover:text-blue-200 transition">Цены</a>
                <a href="#" class="mx-5 hover:text-blue-200 transition">Контакты</a>
            </div>
            
            <div class="contact-info text-right">
                <h1 class="font-bold">+7978-040-31-49</h1>
                <p class="text-sm text-blue-100">Хрусталёва 139</p>
            </div>

        </div>
    </header>

    @yield('content')
</body>
</html>