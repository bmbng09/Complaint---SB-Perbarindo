<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan | SB PERBARINDO</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoperbarindo.png') }}">

    {{-- <title>{{ config('app.name', 'SB PERBARINDO') }}</title> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

<!-- NAVBAR -->
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- BRAND -->
        <div class="text-xl font-bold text-green-700">
            SB PERBARINDO
        </div>

        <!-- MENU -->
        <div class="flex gap-6 items-center">

            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}"
                       class="text-gray-700 hover:text-green-600 font-medium">
                        Dashboard
                    </a>

                    <a href="{{ route('admin.complaints') }}"
                       class="text-gray-700 hover:text-green-600 font-medium">
                        Complaints
                    </a>
                @else
                    <a href="{{ route('pengaduan') }}"
                       class="text-gray-700 hover:text-green-600 font-medium">
                        Pengaduan
                    </a>
                @endif

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-red-600 hover:text-red-800 font-medium">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="text-gray-700 hover:text-green-600 font-medium">
                    Login
                </a>
            @endauth

        </div>
    </div>
</nav>

<!-- CONTENT -->
<main class="py-10">
    @yield('content')
</main>

</body>
</html>
