<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Expense Tracker')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen flex">

    <x-sidebar />

    <div class="flex-1 flex flex-col">
        <nav class="bg-white shadow w-full">
            <div class="flex items-center justify-between px-6 py-4">
                <div class="text-gray-800 text-lg">
                    Welcome back, <span class="font-bold">{{ Auth::user()->name ?? 'Guest' }}</span>
                </div>
                <div class="flex items-center space-x-6">
                    <button class="p-2 rounded-full hover:bg-gray-100 focus:outline-none">
                        <x-heroicon-o-bell class="h-6 w-6 text-gray-500" />
                    </button>
                    @auth
                        <div class="relative">
                            <button id="userDropdown" class="flex items-center space-x-2 focus:outline-none">
                                <img src="{{ asset('images/user-avatar.jpg') }}" alt="User Avatar" class="h-10 w-10 rounded-full">
                                <x-heroicon-o-chevron-down class="h-5 w-5 text-gray-500" />
                            </button>
                            <div id="dropdownMenu" class="absolute right-0 mt-2 bg-white shadow-lg rounded-lg w-48 hidden">
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">View Profile</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-red-500 hover:bg-red-100"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="text-gray-800 text-sm">Login</a>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="flex-1 overflow-y-auto bg-gray-50">
            <div class="px-6 py-8">
                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        const userDropdown = document.getElementById('userDropdown');
        const dropdownMenu = document.getElementById('dropdownMenu');
        if (userDropdown) {
            userDropdown.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });
        }
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
