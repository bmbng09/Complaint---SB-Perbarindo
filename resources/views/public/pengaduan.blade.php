@extends('layouts.user')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 shadow rounded-lg">

    <h2 class="text-2xl font-bold text-green-700 mb-6">
        Form Pengaduan Kendala SIP & Sharing Bandwidth
    </h2>

    @if(session('success'))
        <div class="mb-4 bg-green-100 text-green-800 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <!-- NAMA PIC -->
        <div>
            <label class="block font-medium mb-1">Nama PIC</label>
            <input type="text" name="nama_pic" required
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- NAMA BPR -->
        <div>
            <label class="block font-medium mb-1">Nama BPR / BPRS</label>
            <input type="text" name="nama_bpr" required
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- EMAIL -->
        <div>
            <label class="block font-medium mb-1">Email PIC</label>
            <input type="email" name="email" required
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- DPD -->
        <div>
            <label class="block font-medium mb-1">DPD</label>
            <select name="dpd" required class="w-full border rounded px-3 py-2">
                <option value="">-- Pilih DPD --</option>
                <option value="DPD Jawa Barat">Aceh</option>
                <option value="DPD DKI Jakarta">Bali</option>
                <option value="DPD Jawa Tengah">DKI Jakarta</option>
                <option value="DPD Jawa Tengah">D.I Yogyakarta</option>
                <option value="DPD Jawa Tengah">Jambi</option>
                <option value="DPD Jawa Tengah">Jawa Tengah</option>
                <option value="DPD Jawa Timur">Jawa Barat</option>
                <option value="DPD Sumatera">Jawa Timur</option>
                <option value="DPD Sumatera">Kalimantan Barat - Tengah</option>
                <option value="DPD Sumatera">Kalimantan Selatan</option>
                <option value="DPD Sumatera">Kalimantan Timur - Utara</option>
                <option value="DPD Sumatera">Kepulauan Riau</option>
                <option value="DPD Sumatera">NTB</option>
                <option value="DPD Sumatera">Lampung</option>
                <option value="DPD Sumatera">NTT</option>
                <option value="DPD Sumatera">Papua - Maluku</option>
                <option value="DPD Sumatera">Sulawesi Utara - Gorontalo - Maluku</option>
                <option value="DPD Sumatera">Sumatera Utara</option>
                <option value="DPD Sumatera">Riau</option>
                <option value="DPD Sumatera">Sulawesi Selatan - Barat</option>
                <option value="DPD Sumatera">Sulawesi Tengah</option>
                <option value="DPD Sumatera">Sulawesi Tenggara</option>
                <option value="DPD Sumatera">Sumatera Barat</option>
                <option value="DPD Sumatera">Sumatera Selatan - Bangka Belitung</option>
            </select>
        </div>

        <!-- WHATSAPP -->
        <div>
            <label class="block font-medium mb-1">No WhatsApp</label>
            <input type="text" name="whatsapp" required
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- JENIS KENDALA -->
        <div>
            <label class="block font-medium mb-1">Jenis Kendala</label>
            <select name="jenis_kendala" required
                class="w-full border rounded px-3 py-2">
                <option value="">-- Pilih --</option>
                <option value="SIP">SIP</option>
                <option value="SB">Sharing Bandwidth</option>
            </select>
        </div>

        <!-- DESKRIPSI -->
        <div>
            <label class="block font-medium mb-1">Deskripsi Kendala</label>
            <textarea name="deskripsi" rows="4" required
                class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <!-- BUKTI -->
        <div>
            <label class="block font-medium mb-1">Bukti Kendala (Foto / PDF)</label>
            <input type="file" name="bukti_file"
                accept=".jpg,.jpeg,.png,.pdf"
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- FORM PENGADUAN -->
        <div>
            <label class="block font-medium mb-1">
                Form Pengaduan (PDF)
                <a href="https://drive.google.com/drive/folders/1fHejZoK-jDNqCX5Gj2TXtmT7cP5A2IQX"
                   target="_blank"
                   class="text-green-600 text-sm underline ml-2">
                    Download Template
                </a>
            </label>
            <input type="file" name="form_pengaduan"
                accept=".pdf"
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- SUBMIT -->
        <div class="pt-4">
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg transition">
                Kirim Pengaduan
            </button>
        </div>
    </form>
</div>
@endsection
