@extends('layouts.admin')

@section('content')

<!-- STAT CARDS -->
{{-- <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Total Pengaduan</p>
        <h2 class="text-2xl font-bold text-gray-800">128</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">SIP</p>
        <h2 class="text-2xl font-bold text-blue-600">72</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Sharing Bandwidth</p>
        <h2 class="text-2xl font-bold text-green-600">56</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Selesai</p>
        <h2 class="text-2xl font-bold text-emerald-600">89</h2>
    </div>

</div> --}}
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Total Pengaduan</p>
        <h2 class="text-2xl font-bold text-gray-800">
            {{ $totalPengaduan }}
        </h2>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">SIP</p>
        <h2 class="text-2xl font-bold text-blue-600">
            {{ $totalSIP }}
        </h2>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Sharing Bandwidth</p>
        <h2 class="text-2xl font-bold text-green-600">
            {{ $totalSB }}
        </h2>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-gray-500">Selesai</p>
        <h2 class="text-2xl font-bold text-emerald-600">
            {{ $totalSelesai }}
        </h2>
    </div>

</div>


<!-- CHART AREA -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

    <!-- BAR CHART -->
    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="font-semibold mb-4">Perbandingan Jenis Kendala</h3>
        <canvas id="barChart"></canvas>
    </div>

    <!-- LINE CHART -->
    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="font-semibold mb-4">Trend Pengaduan</h3>
        <canvas id="lineChart"></canvas>
    </div>

</div>

{{-- <script>
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: ['SIP', 'Sharing Bandwidth'],
        datasets: [{
            data: [72, 56],
        }]
    }
});

new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','Mei'],
        datasets: [{
            data: [5,12,20,18,30],
            tension: .4
        }]
    }
});
</script> --}}
<script>
const chartJenis = @json($chartJenis);
const trend = @json($trend);

new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: Object.keys(chartJenis),
        datasets: [{
            label: 'Jumlah Pengaduan',
            data: Object.values(chartJenis),
        }]
    }
});

new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: Object.keys(trend),
        datasets: [{
            label: 'Pengaduan per Bulan',
            data: Object.values(trend),
            tension: 0.4
        }]
    }
});
</script>


@endsection
