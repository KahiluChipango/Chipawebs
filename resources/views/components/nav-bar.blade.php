 <!-- Navbar -->
 <nav class="bg-gray-800 shadow">
        <div class="container mx-auto px-6 py-4">
            <div class="md:flex md:items-center md:justify-between">
            <div class="text-xl font-semibold text-gray-100">
                    <a class="no-underline text-gray-100" href="{{ route('home') }}">Chipawebs</a>
                    </div>

                {{ $slot}}
        </div>
    </nav>