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
<nav class="bg-primary text-white" x-data="{ open: false }" >
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-xl font-semibold">
            <img src="{{ asset('assets/logos/sng_logo.jpg') }}" class="h-20" alt="Logo"/>
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
            <a href="#" class="hover:underline underline-offset-4">Link</a>

            <!-- Dropdown -->
            <x-dropdown>
                <x-slot:trigger>Options</x-slot>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Delete</a>
            </x-dropdown>

            <span class="text-gray-300 cursor-not-allowed">Disabled</span>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden">
        <div x-show="open" x-transition class="px-4 pb-4 space-y-2">
            <a href="#" class="block">Home</a>
            <a href="#" class="block">Link</a>
            <div>
                <button @click="dropdownOpen = !dropdownOpen" class="w-full text-left">Dropdown</button>
                <div x-show="dropdownOpen" class="pl-4 mt-2 space-y-1">
                    <a href="#" class="block">Action</a>
                    <a href="#" class="block">Another action</a>
                    <a href="#" class="block">Something else here</a>
                </div>
            </div>
            <span class="block text-gray-300">Disabled</span>
        </div>
    </div>
</nav>


<main>
    @yield('content')
</main>
</body>
</html>
