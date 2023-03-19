<x-guest-layout>

    <!-- Navbar -->
    <nav class="bg-gray-800 shadow">
        <div class="container mx-auto px-6 py-4">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-between">
                    <div class="text-xl font-semibold text-gray-100">
                        <a class="no-underline text-gray-100" href="#">My Website</a>
                    </div>


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
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="#">Home</a>
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="#">About</a>
                        <a class="my-1 text-gray-100 hover:text-gray-400 md:mx-4 md:my-0" href="#">Contact</a>
                    </div>
                </div>

                <!-- Facebook icon -->
                <div class="flex items-center">
                    <a href="https://facebook.com/chipawebz" class="text-gray-100 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="Facebook">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.251c-5.493 0-9.972 4.479-9.972 9.972 0 4.938 3.59 9.012 8.307 9.764v-6.905h-2.406v-2.706h2.406v-1.98c0-2.382 1.422-3.688 3.574-3.688 1.035 0 1.965.077 2.223.112v2.47l-1.516.001c-1.194 0-1.424.567-1.424 1.396v1.829h2.844l-.372 2.706h-2.472v6.905c4.717-.752 8.307-4.826 8.307-9.764-.001-5.493-4.479-9.972-9.971-9.972z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center">Welcome to my website</h1>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</x-guest-layout>
