@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-6">

    <h2 class="text-2xl font-bold text-green-700 mb-6">
        Dashboard Admin
    </h2>

    <!-- STATS -->
    <div class="grid md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-500">Total Pengaduan</p>
            <h3 class="text-3xl font-bold">{{ $total }}</h3>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-500">SIP</p>
            <h3 class="text-3xl font-bold text-blue-600">{{ $sip }}</h3>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-500">Sharing Bandwidth</p>
            <h3 class="text-3xl font-bold text-green-600">{{ $sb }}</h3>
        </div>
    </div>

    <!-- CHART -->
    <div class="bg-white p-2 rounded-lg shadow mb-10 max-w-xl">
        <canvas id="chartJenis" height="100"></canvas>
    </div>

    <!-- RECENT -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h4 class="font-semibold mb-4">Pengaduan Terbaru</h4>

        <ul class="divide-y">
            @foreach($latest as $c)
            <li class="py-3 flex justify-between">
                <span>{{ $c->nama_bpr }}</span>
                <span class="text-sm text-gray-500">{{ $c->jenis_kendala }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chartJenis');
new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['SIP', 'Sharing Bandwidth'],
        datasets: [{
            data: [{{ $sip }}, {{ $sb }}],
            backgroundColor: ['#2563eb', '#16a34a'],
        }]
    }
});
</script>
@endsection
