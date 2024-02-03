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

        <!-- Icons -->
        <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.1-web/css/all.min.css")}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased"  x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
        <div x-bind:class="{'dark' : darkMode === true}" >
            <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
                <div class="">
                    @include('layouts.navigation')
                </div>
                <div class="transition flex justify-between w-full min-h-screen">
                    @include('layouts.sidebar')
                    <main id="main-content" class="pt-16 ml-56 w-full">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
    <script>
        var sidebar = document.getElementById("sidebar");
        var main = document.getElementById("main-content");
        var isMarginSet = main.classList.contains("ml-56")
        document.getElementById("toggleSidebar").addEventListener("click", function(event) {
            event.preventDefault();
            sidebar.classList.toggle("hidden")
            main.classList.toggle("ml-56")
        })
    </script>
</html>
