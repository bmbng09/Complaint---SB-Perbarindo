<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - SB PERBARINDO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-green-700 text-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="text-lg font-bold">
            ADMIN SB PERBARINDO
        </div>

        <div class="flex gap-6 items-center">
            <a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a>
            <a href="{{ route('admin.complaints') }}" class="hover:underline">Complaints</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-300 hover:text-red-100">Logout</button>
            </form>
        </div>
    </div>
</nav>

<main class="py-10">
    @yield('content')
</main>

</body>
</html>
