<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kyoo</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">


    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Alpine.JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>

    {{-- Flowbite --}}
    <script src="/../node_modules/flowbite/dist/flowbite.min.js"></script>

</head>

<body class="antialiased flex flex-col">

    {{-- Laravel Breeze initial components --}}
    {{-- @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</body>

</html>
