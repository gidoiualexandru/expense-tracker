<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Expense Tracker')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div>
                    <a href="{{ route('budgets.index') }}" class="text-gray-800 text-xl font-bold">Expense Tracker</a>
                </div>
                <div>
                    @auth
                        <span class="text-gray-800 text-sm">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="ml-4 text-gray-800 text-sm"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="text-gray-800 text-sm">Login</a>
                        <a href="{{ route('register') }}" class="ml-4 text-gray-800 text-sm">Register</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
