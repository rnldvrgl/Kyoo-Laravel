<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kyoo</title>

    {{-- Fonts --}}
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Alpine.JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>

    {{-- Flowbite --}}
    <script src="/../node_modules/flowbite/dist/flowbite.min.js"></script>

</head>

<body class="antialiased flex flex-col min-h-screen h-auto">
    {{ $slot }}
</body>

</html>
