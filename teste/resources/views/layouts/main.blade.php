<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ao digitar "/" o laravel identifica como a pasta public -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <footer>
        <p>Andrey da Hora &copy; 2023</p>
    </footer>
</body>
</html>