<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">
            Pertanyaan yang Sering Diajukan (FAQ)
        </h2>

        <div class="space-y-4">
            @php
                $faqs = [
                    [
                        'q' => 'Apa itu Sharing Bandwidth PERBARINDO?',
                        'a' => 'Sharing Bandwidth adalah mekanisme pembagian kapasitas jaringan secara terpusat agar koneksi antar BPR tetap stabil, aman, dan efisien.'
                    ],
                    [
                        'q' => 'Kapan saya perlu mengajukan pengaduan?',
                        'a' => 'Jika terjadi gangguan koneksi, aplikasi tidak terhubung, atau transaksi melalui SIP/JB terhambat.'
                    ],
                    [
                        'q' => 'Apakah pengaduan akan ditangani langsung?',
                        'a' => 'Setiap pengaduan masuk ke dashboard admin dan akan ditindaklanjuti sesuai tingkat prioritas.'
                    ],
                ];
            @endphp

            @foreach ($faqs as $index => $faq)
                <div x-data="{ open: false }" class="border rounded-lg">
                    <button
                        @click="open = !open"
                        class="w-full flex justify-between items-center p-4 text-left font-medium text-gray-800 hover:bg-gray-100">
                        {{ $faq['q'] }}
                        <span x-text="open ? '−' : '+'"></span>
                    </button>

                    <div x-show="open" x-transition class="p-4 text-gray-600 border-t">
                        {{ $faq['a'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
