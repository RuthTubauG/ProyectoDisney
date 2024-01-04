<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900">
    <div class="min-h-screen bg-repeat bg-center" style="background-image: url('https://i.pinimg.com/originals/fa/88/bb/fa88bb7d29e4492787aad8a45c5c6963.png');"> <!-- "bg imagen de fondo" Color de fondo -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"> <!--Aqui iria el color de fondo -->
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-pink-700" /> <!-- Color logo -->
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-pink-700 dark:bg-pink-700 shadow-md overflow-hidden sm:rounded-lg"> <!-- Color del login -->
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
