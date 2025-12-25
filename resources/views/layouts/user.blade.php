<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SB PERBARINDO') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="text-xl font-bold text-green-700">
            SB PERBARINDO
        </div>

        <div class="flex gap-6 items-center">
            <a href="/" class="text-gray-700 hover:text-green-600">Beranda</a>
            <a href="{{ route('pengaduan') }}" class="text-gray-700 hover:text-green-600">Pengaduan</a>

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-600 hover:text-red-800">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-green-600">Login</a>
            @endauth
        </div>
    </div>
</nav>

<main class="py-10">
    @yield('content')
</main>

@if(session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: 'success',
    title: 'Pengaduan Terkirim',
    text: '{{ session('success') }}',
    confirmButtonColor: '#16a34a'
});
</script>
@endif

</body>
</html>
