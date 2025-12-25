@extends('layouts.user')

@section('content')

<!-- HERO -->
<section class="relative h-screen overflow-hidden">
    <video autoplay muted loop playsinline
        class="absolute w-full h-full object-cover">
        <source src="{{ asset('assets/video/header.mp4') }}" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
        <div class="text-white max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Layanan Pengaduan Jaringan Bersama
            </h1>
            <p class="text-lg md:text-xl mb-6">
                Solusi cepat dan terintegrasi untuk kendala SIP dan Sharing Bandwidth BPR
            </p>
            <a href="#pengaduan"
               class="inline-block bg-green-600 hover:bg-green-700 transition px-6 py-3 rounded-lg font-semibold">
                Ajukan Pengaduan
            </a>
        </div>
    </div>
</section>

{{-- <section class="bg-gradient-to-r from-green-700 to-green-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl font-bold mb-4 leading-tight">
                Sharing Bandwidth <br> PERBARINDO
            </h1>
            <p class="text-green-100 mb-8">
                Platform resmi PERBARINDO untuk mendukung stabilitas jaringan,
                integrasi SIP, dan pelaporan kendala BPR/BPRS secara terpusat.
            </p>

            <div class="flex gap-4">
                <a href="{{ route('pengaduan') }}"
                   class="bg-white text-green-700 px-6 py-3 rounded-lg font-semibold
                          hover:bg-green-100 transition shadow">
                    Laporkan Kendala
                </a>

                <a href="#sb"
                   class="border border-white px-6 py-3 rounded-lg
                          hover:bg-white hover:text-green-700 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

        <div class="hidden md:block">
            <img src="https://cdn-icons-png.flaticon.com/512/2920/2920244.png"
                 class="w-80 mx-auto opacity-90">
        </div>
    </div>
</section> --}}

<!-- SHARING BANDWIDTH -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <img src="{{ asset('assets/img/logoperbarindo.png') }}"
             class="rounded-xl shadow-lg">

        <div>
            <h2 class="text-3xl font-bold text-green-700 mb-4">
                Tentang Aplikasi Jaringan Bersama
            </h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Aplikasi Jaringan Bersama digunakan oleh BPR untuk mendukung
                layanan transaksi dan konektivitas antar sistem perbankan.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Melalui platform ini, setiap kendala dapat dilaporkan secara
                terpusat, terdokumentasi, dan ditangani secara cepat.
            </p>
        </div>

    </div>
</section>

{{-- <section id="sb" class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-green-700 mb-4">
            Apa itu Sharing Bandwidth?
        </h2>

        <p class="text-gray-600 max-w-3xl mx-auto">
            Sharing Bandwidth PERBARINDO adalah skema pemanfaatan jaringan bersama
            antar BPR/BPRS untuk menjamin konektivitas SIP yang stabil, efisien,
            dan terstandarisasi secara nasional.
        </p>
    </div>
</section> --}}

<!-- APLIKASI -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h3 class="text-2xl font-bold text-green-700 mb-4">
                Aplikasi Sharing Bandwidth
            </h3>
            <p class="text-gray-600 mb-6">
                Aplikasi ini digunakan untuk monitoring, koneksi SIP,
                dan integrasi jaringan BPR/BPRS dengan infrastruktur PERBARINDO.
            </p>

            <a href="#"
               class="inline-block bg-green-600 hover:bg-green-700 text-white
                      px-6 py-3 rounded-lg transition shadow">
                Download Aplikasi
            </a>
        </div>

        <div class="bg-green-50 p-8 rounded-xl shadow">
            <ul class="space-y-3 text-gray-700">
                <li>✔ Monitoring koneksi real-time</li>
                <li>✔ Integrasi SIP</li>
                <li>✔ Standar keamanan nasional</li>
                <li>✔ Dukungan teknis PERBARINDO</li>
            </ul>
        </div>
    </div>
</section>

<!-- TUTORIAL -->
<section class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-green-700 mb-8 text-center">
            Panduan & Tutorial Instalasi
        </h3>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                'Unduh aplikasi Sharing Bandwidth',
                'Instal dan konfigurasi jaringan',
                'Lakukan koneksi ke SIP PERBARINDO'
            ] as $step)
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h4 class="font-semibold mb-2 text-green-600">
                    {{ $loop->iteration }}. {{ $step }}
                </h4>
                <p class="text-sm text-gray-600">
                    Ikuti panduan resmi untuk memastikan koneksi berjalan optimal.
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-green-700 mb-10">
            Frequently Asked Questions
        </h2>

        @php
        $faqs = [
            ['q'=>'Apa itu aplikasi Jaringan Bersama?',
             'a'=>'Aplikasi yang digunakan untuk mendukung konektivitas antar sistem BPR.'],
            ['q'=>'Jenis kendala apa yang bisa dilaporkan?',
             'a'=>'Kendala SIP dan Sharing Bandwidth.'],
            ['q'=>'Berapa lama penanganan pengaduan?',
             'a'=>'Bergantung pada kompleksitas, namun diproses secepat mungkin.'],
            ['q'=>'Apakah bukti wajib dilampirkan?',
             'a'=>'Sangat dianjurkan untuk mempercepat analisis.'],
        ];
        @endphp

        <div class="space-y-4">
            @foreach($faqs as $faq)
            <details class="group border rounded-lg p-4">
                <summary class="cursor-pointer font-semibold flex justify-between items-center">
                    {{ $faq['q'] }}
                    <span class="group-open:rotate-180 transition">⌄</span>
                </summary>
                <p class="mt-3 text-gray-600">
                    {{ $faq['a'] }}
                </p>
            </details>
            @endforeach
        </div>

    </div>
</section>

{{-- <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-green-700 mb-8 text-center">
            Pertanyaan yang Sering Diajukan
        </h3>

        <div class="space-y-4">
            <div class="border rounded-lg p-4 hover:bg-green-50 transition">
                <strong>Jika terjadi gangguan, apa yang harus dilakukan?</strong>
                <p class="text-gray-600 mt-2">
                    Segera laporkan melalui form pengaduan agar dapat ditindaklanjuti oleh tim teknis.
                </p>
            </div>

            <div class="border rounded-lg p-4 hover:bg-green-50 transition">
                <strong>Apakah setiap BPR wajib menggunakan Sharing Bandwidth?</strong>
                <p class="text-gray-600 mt-2">
                    Penggunaan disesuaikan dengan kebijakan dan kebutuhan masing-masing BPR/BPRS.
                </p>
            </div>
        </div>
    </div>
</section> --}}

<!-- CTA -->
<section class="bg-green-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-bold mb-4">
            Mengalami Kendala?
        </h3>
        <p class="mb-6 text-green-100">
            Laporkan sekarang agar segera ditangani oleh tim PERBARINDO.
        </p>

        <a href="{{ route('pengaduan') }}"
           class="bg-white text-green-700 px-8 py-3 rounded-lg
                  hover:bg-green-100 transition shadow font-semibold">
            Buat Pengaduan
        </a>
    </div>
</section>

<footer class="bg-green-700 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <div>
            <h4 class="font-bold mb-3">Kontak</h4>
            <p>Email: support@jaringanbersama.co.id</p>
            <p>Telp: (021) 1234 5678</p>
        </div>

        <div>
            <h4 class="font-bold mb-3">Layanan</h4>
            <p>Pengaduan SIP</p>
            <p>Sharing Bandwidth</p>
        </div>

        <div>
            <h4 class="font-bold mb-3">Hak Cipta</h4>
            <p>© {{ date('Y') }} Jaringan Bersama</p>
        </div>

    </div>
</footer>


@endsection
