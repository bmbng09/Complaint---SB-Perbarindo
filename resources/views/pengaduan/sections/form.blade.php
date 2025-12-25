<section id="form-pengaduan" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">
            Form Pengaduan Kendala
        </h2>

        <p class="text-center text-gray-600 mb-10">
            Silakan lengkapi form berikut dengan data yang valid agar pengaduan
            dapat diproses dengan cepat oleh tim administrator.
        </p>

        <form action="{{ route('pengaduan.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-gray-100 p-8 rounded-xl shadow space-y-6">
            @csrf

            {{-- NAMA PIC --}}
            <div>
                <label class="block font-medium mb-1">Nama PIC</label>
                <input type="text" name="nama_pic" required
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            {{-- NAMA BPR --}}
            <div>
                <label class="block font-medium mb-1">Nama BPR/BPRS</label>
                <input type="text" name="nama_bpr" required
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            {{-- EMAIL --}}
            <div>
                <label class="block font-medium mb-1">Email PIC</label>
                <input type="email" name="email" required
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            {{-- DPD --}}
            <div>
                <label class="block font-medium mb-1">DPD PERBARINDO</label>
                <select name="dpd" required
                        class="w-full border rounded-lg px-4 py-2">
                    <option value="">-- Pilih DPD --</option>
                    <option>DPD DKI Jakarta</option>
                    <option>DPD Jawa Barat</option>
                    <option>DPD Jawa Tengah</option>
                    <option>DPD Jawa Timur</option>
                    <option>DPD Banten</option>
                    <option>DPD Sumatera</option>
                    <option>DPD Kalimantan</option>
                    <option>DPD Sulawesi</option>
                    <option>DPD Bali Nusra</option>
                </select>
            </div>

            {{-- WHATSAPP --}}
            <div>
                <label class="block font-medium mb-1">No. WhatsApp PIC</label>
                <input type="text" name="whatsapp" required
                       class="w-full border rounded-lg px-4 py-2"
                       placeholder="08xxxxxxxxxx">
            </div>

            {{-- JENIS KENDALA --}}
            <div>
                <label class="block font-medium mb-1">Jenis Kendala</label>
                <select name="jenis_kendala" required
                        class="w-full border rounded-lg px-4 py-2">
                    <option value="">-- Pilih Jenis Kendala --</option>
                    <option value="SIP">SIP</option>
                    <option value="Sharing Bandwidth">Sharing Bandwidth</option>
                </select>
            </div>

            {{-- DESKRIPSI --}}
            <div>
                <label class="block font-medium mb-1">Deskripsi Kendala</label>
                <textarea name="deskripsi" rows="4" required
                          class="w-full border rounded-lg px-4 py-2"></textarea>
            </div>

            {{-- BUKTI --}}
            <div>
                <label class="block font-medium mb-1">
                    Bukti Kendala (Foto / PDF)
                </label>
                <input type="file" name="bukti"
                       accept=".jpg,.jpeg,.png,.pdf"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            {{-- FORM PENGADUAN --}}
            <div>
                <label class="block font-medium mb-1">
                    Form Pengaduan (PDF)
                </label>

                <div class="flex items-center gap-4">
                    <input type="file" name="form_pengaduan"
                           accept=".pdf"
                           class="w-full border rounded-lg px-4 py-2">

                    <a href="https://drive.google.com/drive/folders/1fHejZoK-jDNqCX5Gj2TXtmT7cP5A2IQX"
                       target="_blank"
                       class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition whitespace-nowrap">
                        Download Template
                    </a>
                </div>
            </div>

            {{-- SUBMIT --}}
            <div class="pt-4">
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-semibold transition">
                    Kirim Pengaduan
                </button>
            </div>

        </form>
    </div>
</section>
