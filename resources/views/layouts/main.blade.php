<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie app</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Connect livewire -->
    @livewireStyles
    <!-- Connect Alpine JS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-900 text-white">
<!-- Navbar-->
<nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="{{ route('movies.index') }}">
                    <img src="{{ asset('/images/cinema.png') }}" alt="" class="w-16">
                </a>
            </li>
            <li class="md:ml-16 mt-3 md:mt-0">
                <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="#" class="hover:text-gray-300">TV Shows</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <!-- Search input -->
        <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown>
            <!-- User avatar -->
            <div class="md:ml-4 mt-3 md:mt-0">
                <a href="#">
                    <img src="{{ asset('/images/avatar.png') }}" alt="avatar" class="rounded-full w-12 h-12">
                </a>
            </div>
        </div>
    </div>
</nav>

@yield('content')
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts

@yield('scripts')
</body>
</html>
