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

<body class="font-sans antialiased">
    <div class="min-h-screen ">
        @include('layouts.navigation')

        <div class="flex justify-center mt-10">
            <h1 class="items-center text-xl font-bold my-5"> Welcome to My Website🫶🏻</h1>
            {{-- <img src="{{ url('logo.png') }}" class="h-20 w-20"  /> --}}
        </div>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>


        <x-footer />
    </div>
</body>

</html>