@extends('layouts.user')

@section('content')

<!-- HERO -->
<section class="relative h-screen w-full overflow-hidden">

    <!-- VIDEO BACKGROUND -->
    <video autoplay muted loop playsinline
        class="absolute inset-0 w-full h-full object-cover">
        <source src="{{ asset('assets/video/header.mp4') }}" type="video/mp4">
    </video>

    <!-- OVERLAY (biar teks kebaca) -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-7xl mx-auto h-full flex items-center px-6">
        <div class="max-w-2xl text-white">

            <span class="text-sm uppercase tracking-widest text-white/70">
                Sistem Pengaduan Resmi
            </span>

            <h1 class="mt-4 text-5xl md:text-6xl font-light leading-tight">
                Solusi Pengaduan <br>
                <span class="font-semibold">SIP & Sharing Bandwidth</span>
            </h1>

            <p class="mt-6 text-lg text-white/80">
                Platform terintegrasi untuk melaporkan kendala jaringan,
                memastikan transparansi, kecepatan, dan akurasi penanganan.
            </p>

            <div class="mt-8 flex items-center gap-4">
                <a href="{{ route('pengaduan') }}"
                   class="px-6 py-3 bg-white text-black rounded-full
                          font-medium hover:bg-gray-200 transition">
                    Laporkan Sekarang
                </a>

                {{-- <a href="#panduan"
                   class="flex items-center gap-2 text-white/90 hover:text-white transition">
                    <span class="w-10 h-10 flex items-center justify-center
                                 border border-white/40 rounded-full">
                        →
                    </span>
                    Panduan Penggunaan
                </a> --}}
            </div>

        </div>
    </div>
</section>
{{-- <section class="w-full h-screen relative overflow-hidden">
    <video autoplay muted loop playsinline
        class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="{{ asset('assets/video/header.mp4') }}" type="video/mp4">
    </video>

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
</section> --}}

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

        {{-- <img src="{{ asset('assets/video/landing.mp4') }}"
             class="rounded-xl"> --}}
        <video autoplay muted loop playsinline preload="auto"class="w-80 h-auto mx-auto">
            <source src="{{ asset('assets/video/landing.mp4') }}" type="video/mp4">
        </video>
        <div>
            <h2 class="text-3xl font-bold text-green-700 mb-4 animate-fade-down">
                Aplikasi Sharing Bandwidth
            </h2>
            <p class="text-gray-700 leading-relaxed mb-4 animate-fade-down-delay-1">
                Aplikasi jaringan bersama BPR Sharing Bandwidth
            </p>
            <p class="text-gray-700 leading-relaxed animate-fade-down-delay-2">
                Terimakasih telah menggunakan aplikasi Sharing Bandiwidth Perbarindo,
                Untuk memudahkan anda dalam mengunakan aplikasi ini anda bisa mendownload
                dan menginstal nya di komputer atau laptop anda, bila anda mengalami
                kendala saat mengunakan aplikasi ini, anda bisa mendownload petunjuk
                pengunaan agar mempermudah anda saat penginstalan hingga cara pengunaan
                aplikasi BPR perbarindo
            </p>
            <br>
            {{-- <h3 class="text-2xl font-bold text-green-700 mb-4">
                Aplikasi Sharing Bandwidth
            </h3> --}}
            <h3 class="text-1xl font-bold text-green-700 mb-4 animate-fade-down-delay-2">
                Sharing Bandwidth v3.1.45
            </h3>
            <p class="text-gray-600 mb-6 animate-fade-down-delay-2">
                Update: 4 April 2024 <br>
                Update ISO 27001
            </p>

            <a href="{{ asset('assets/Sharing-Bandwidth-Launcher.exe') }}"
               class="inline-block bg-green-600 hover:bg-green-700 text-white
                      px-6 py-3 rounded-lg transition shadow animate-fade-down-delay-2">
                Download Aplikasi
            </a>
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

<section class="relative w-full h-[80vh] overflow-hidden">

    <!-- Background Image -->
    <img src="{{ asset('assets/img/about-bg.png') }}"
         alt="Tentang Kami"
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto h-full px-6 flex items-center">
        <div class="max-w-xl text-white">

            {{-- <span class="uppercase text-sm tracking-widest text-white/80 block mb-3">
                Sekilas Pertamina
            </span> --}}

            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Panduan & Tutorial Instalasi
            </h1>

            <p class="text-lg text-white/90 mb-10 leading-relaxed">
                Ikuti panduan resmi untuk memastikan koneksi berjalan optimal.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ asset('assets/manual-book-pengguna-baru.pdf') }}"
                   class="inline-flex items-center gap-2 px-6 py-3
                          border border-white rounded-full
                          hover:bg-white hover:text-black
                          transition">
                    Download Manual Book
                    <span class="text-xl">↗</span>
                </a>

                <a href="{{ asset('assets/video/tutorial.mp4') }}"
                   class="inline-flex items-center gap-2 px-6 py-3
                          border border-white/70 rounded-full
                          text-white/90
                          hover:bg-white hover:text-black
                          transition">
                    Download Video Tutorial Penginstallan
                    <span class="text-xl">↗</span>
                </a>
            </div>

        </div>
    </div>

</section>

<!-- TUTORIAL -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-green-700 mb-8 text-center">
            Terkendala Saat Update Installasi?
        </h3>
        <h3 class="text-1xl font-bold text-green-700 mb-8 text-center">
            Ikuti langkah berikut:
        </h3>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                'Uninstall aplikasi yang sudah terinstall, jika masih ada',
                'Hapus shortcut di desktop, jika masih ada',
                'Download installer baru melalui link di samping',
                'Lakukan installasi seperti biasa. Untuk installasi driver, cukup di-skip dengan cara di-close',
                'Pastikan koneksi lancar saat akses launcher',
                'Jika proses download dalam launcher gagal atau tersangkut, klik tombol "atur ulang" pada saat awal mengakses launcher kemudian mulai launcher kembali',
            ] as $step)
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h4 class="font-semibold mb-2 text-green-600">
                    {{ $loop->iteration }}. {{ $step }}
                </h4>
                {{-- <p class="text-sm text-gray-600">
                    Ikuti panduan resmi untuk memastikan koneksi berjalan optimal.
                </p> --}}
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
            ['q'=>'Dimana saya bisa mendapatkan serial numbernya?',
             'a'=>'Silahkan untuk mengecek web SIP Masing-masing BPR pada bagian Menu Sharing Bandwidth -> Layanan -> Manage Layanan Aktif -> Kemudian di tab Serial Number SB3'],
            ['q'=>'Bagaimana jika saya ingin menggunakan lebih dari satu serial number?',
             'a'=>'Setelah BPR memiliki akun admin. maka akun tersebut memiliki akses untuk generate serial number dan reset serial number secara mandiri melalui menu Manajemen terminal dan dapat melakukan generate maksimal 5 terminal. Anda juga dapat melakukan generate langsung melalui website SIP masing-masing BPR'],
            ['q'=>'Apa spesifikasi minimal terminal untuk menggunakan aplikasi?',
             'a'=>'Windows 7-10 32/64 Bit,
        Processor Minimal 4 Core,
        Ruang Tersedia Hardisk 5GB,
        Minimal RAM 4GB,
        Minimal Kecepatan Internet Rekomendasi 5Mbps stabil.

        Direkomendasikan Menggunakan Windows 10 64Bit'],
            ['q'=>'Saya belum mendapat user web portal cek nik ataupun web portal databalikan?',
             'a'=>'Bagi yang belum mendapatkan user untuk web portal dukcapil baik itu web portal cek nik ataupun webportal databalikan, silahkan untuk melakukan konfirmasi ke DPP Perbarindo Pusat, Baik itu melalui Pak Selo, Pak Ali, atau Pak Ridho untuk di teruskan ke pihak Dukcapil, dikarenakan data tersebut berada diranah Dukcapil'],
            ['q'=>'Kok buka web portal via aplikasi kadang tertutup sendiri?',
             'a'=>'Untuk versi 3.0.1.30 keatas, setiap akses melalui aplikasi dibatasi per 10 menit akses, jika waktu akses telah habis, maka akan muncul notifikasi yang akan mengkonfirmasikan apakah ingin melanjutkan koneksi atau tidak. Jika notifikasi tidak direspon selama lebih dari 1 menit, maka koneksi akan diputuskan secara otomatis dan portal via aplikasi akan tertutup. untuk mengakses kembali, maka silahkan untuk membuka kembali aplikasi portal pada menu web portal'],
            ['q'=>'Apakah membuka web portal cek nik dan databalikan bisa secara bersamaan?',
             'a'=>'Untuk versi 3.0.1.30 keatas sudah bisa. perlu diketahui, mengakses web portal melalui browser masing menggunakan random key yg di generate melalui aplikasi, sehingga setiap kali user menekan tombol akses web portal via browser, maka key akan digererate baru dan browser akan dibuka secara otomatis dari aplikasi. pada versi terbaru, key untuk portal check nik dan portal databalikan sudah dibedakan sehingga dapat diakses keduanya secara bersamaan'],
            ['q'=>'Nik yang saya inputkan diaplikasi apakah langsung terinput di web portal databalikan?',
             'a'=>'Tidak, setiap user wajib mengisikan sendiri databalikan pada web portal yang disediakan dukcapil yang dapat diakses melalui halaman databaikan dengan menekan portal databalikan. Perlu diketahui, karna faktor keamanan, web portal databalikan dukcapil dan aplikasi berbeda ranah sehingga data yang tersimpan pada aplikasi tidak langsung tersimpan otomatis pada portal databalikan dukcapil. Histori pengecekan nik pada aplikasi digunakan sebagai data penyimpanan tiap terminal BPR masing-masing untuk mempermudah proses pemberkasan sehingga suatu saat bisa digunakan untuk mengupload databalikan pada portal dukcapil'],
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
