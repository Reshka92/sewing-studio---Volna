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
<body class="font-roboto">
    <header class="">
        <div>
            <div class="img-logo">

            </div>
            <div class="header-buttons">
                <a href="#" class="mx-5">Главная</a>
                <a href="#" class="mx-5">О нас</a>
                <a href="#" class="mx-5">Работы</a>
                <a href="#" class="mx-5">Цены</a>
            </div>
            <div class="contact-info">
                <h1>+7978-040-31-49</h1>
                <p>Хрусталёва 139</p>
            </div>
        </div>
    </header>
    @yield('content')
</body>
</html>