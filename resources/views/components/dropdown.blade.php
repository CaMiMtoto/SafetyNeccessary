<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="px-4 py-2 bg-primary text-white rounded-md cursor-pointer">
        {{ $trigger }}
    </button>

    <div x-show="open" x-transition @click.away="open = false" class="absolute mt-2 w-48 bg-white text-black rounded-md shadow-lg z-50" x-cloak>
        {{ $slot }}
    </div>
</div>
