<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title inertia>{{ config('app.name', 'Portfolio') }}</title>

    @routes
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/main.jsx'])
    @inertiaHead
</head>

<body class="antialiased bg-gray-100">
    @inertia
</body>
</html>