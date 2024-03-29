<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Chipawebs') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
       <x-nav-bar>
         <div class="flex items-center justify-between">
                    
                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="text-gray-100 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="hidden md:flex md:items-center md:justify-between flex-1">
                    <div class="flex flex-col md:flex-row md:mx-6">
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="{{ route('home') }}">Home</a>
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="{{ route('email-templates') }}">Email Templates</a>
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="#">About</a>
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="#">Contact</a>
                    </div>
                </div>

                <!-- Facebook icon -->
                <div class="flex items-center">
                    <a href="https://facebook.com/chipawebz" target="_blank" class="text-gray-100 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="Facebook">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.251c-5.493 0-9.972 4.479-9.972 9.972 0 4.938 3.59 9.012 8.307 9.764v-6.905h-2.406v-2.706h2.406v-1.98c0-2.382 1.422-3.688 3.574-3.688 1.035 0 1.965.077 2.223.112v2.47l-1.516.001c-1.194 0-1.424.567-1.424 1.396v1.829h2.844l-.372 2.706h-2.472v6.905c4.717-.752 8.307-4.826 8.307-9.764-.001-5.493-4.479-9.972-9.971-9.972z"/>
                        </svg>
                    </a>
                </div>
            </div>
       </x-nav-bar>

                {{ $slot }}

                 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
