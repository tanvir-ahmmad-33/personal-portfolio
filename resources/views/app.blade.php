<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @viteReactRefresh
    @vite('resources/js/main.jsx')
</head>
<body class="antialiased bg-gray-100">
    @inertia
</body>
</html>