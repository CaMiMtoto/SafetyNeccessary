<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
{{--    <script src="//unpkg.com/alpinejs" defer></script>--}}

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="">
<nav class=" text-white" x-data="{ open: false }" >
    <div class="mx-auto px-4 lg:px-16 py-4 flex items-center justify-between bg-primary">
        <!-- Logo -->
        <a href="#" class="text-xl font-semibold">
            <img src="{{ asset('assets/logos/sng_logo.png') }}" class="h-20" alt="Logo"/>
        </a>

        <!-- Mobile Toggle -->
        <button
            class="lg:hidden focus:outline-none cursor-pointer"
            @click="open = !open"
            aria-label="Toggle navigation"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Navigation Links -->
        <div class="hidden lg:flex space-x-6 items-center">
            <a href="#" class="hover:underline underline-offset-4">Home</a>
            <a href="#" class="hover:underline underline-offset-4">Service</a>
            <a href="#" class="hover:underline underline-offset-4">Contact</a>
            <a href="#" class="hover:underline underline-offset-4">About</a>
            <a href="#" class="hover:underline underline-offset-4">Blog</a>
            <!-- Dropdown -->
            <x-dropdown>
                <x-slot:trigger>Options</x-slot>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Delete</a>
            </x-dropdown>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="lg:hidden bg-primary">
        <div x-show="open" x-transition class="px-4 pb-4 space-y-2 flex flex-col">
            <a href="#" class="hover:underline underline-offset-4">Home</a>
            <a href="#" class="hover:underline underline-offset-4">Service</a>
            <a href="#" class="hover:underline underline-offset-4">Contact</a>
            <a href="#" class="hover:underline underline-offset-4">About</a>
            <a href="#" class="hover:underline underline-offset-4">Blog</a>
            <!-- Dropdown -->
            <x-dropdown>
                <x-slot:trigger>Options</x-slot>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Delete</a>
            </x-dropdown>
        </div>
    </div>
</nav>


<main class="">
    @yield('content')
</main>

<footer>

</footer>
</body>
</html>
