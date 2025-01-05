<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased" x-data x-on:click="$dispatch('search:clear-results')">
        <div class="bg-gray-50 text-black/50">

            <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="items-center flex justify-between pt-6">

                        <nav>
                            <ul>
                                <li>
                                    <a href="/" class="text-gray-900 hover:text-[#FF2D20]">Home</a>
                                </li>
                            </ul>
                        </nav>

                        <livewire:search placeholder="Search . . .">

                    </header>

                    <livewire:show-article />

                    <main class="mt-6">
                        {{ $slot }}
                    </main>

                </div>
            </div>
        </div>

        <script data-navigate-once>
            console.log('page Loaded');
        </script>

    {{-- @livewireScripts --}}

    </body>
</html>
