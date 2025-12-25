@extends('layouts.admin')

@section('content')
<div class="max-w-5xl mx-auto px-6">

    <h2 class="text-2xl font-bold text-green-700 mb-6">
        Detail Pengaduan
    </h2>

    <div class="bg-white p-6 rounded-lg shadow space-y-4">
        <p><strong>Nama BPR:</strong> {{ $complaint->nama_bpr }}</p>
        <p><strong>Nama PIC:</strong> {{ $complaint->nama_pic }}</p>
        <p><strong>Email:</strong> {{ $complaint->email }}</p>
        <p><strong>DPD:</strong> {{ $complaint->dpd }}</p>
        <p><strong>WhatsApp:</strong> {{ $complaint->whatsapp }}</p>
        <p><strong>Jenis Kendala:</strong> {{ $complaint->jenis_kendala }}</p>

        <p><strong>Deskripsi:</strong></p>
        <p class="bg-gray-50 p-3 rounded">{{ $complaint->deskripsi }}</p>

        <!-- BUKTI -->
        <div>
            <h4 class="font-semibold mb-2">Bukti Kendala</h4>

            @if($complaint->bukti_file)
                @if(Str::endsWith($complaint->bukti_file, ['jpg','jpeg','png']))
                    <img src="{{ asset('storage/'.$complaint->bukti_file) }}"
                         class="max-w-md rounded shadow">
                @else
                    <iframe src="{{ asset('storage/'.$complaint->bukti_file) }}"
                            class="w-full h-96 border rounded"></iframe>
                @endif
            @else
                <p class="text-gray-500">Tidak ada bukti</p>
            @endif
        </div>

        <!-- FORM -->
        <div>
            <h4 class="font-semibold mb-2">Form Pengaduan</h4>

            @if($complaint->form_pengaduan)
                <iframe src="{{ asset('storage/'.$complaint->form_pengaduan) }}"
                        class="w-full h-96 border rounded"></iframe>
            @else
                <p class="text-gray-500">Tidak ada form</p>
            @endif
        </div>

        <!-- ACTION -->
        <div class="flex gap-4 pt-4">
            <form action="{{ route('admin.complaints.status', $complaint->id) }}" method="POST">
                @csrf
                <select name="status" class="border rounded px-3 py-2">
                    <option value="new">NEW</option>
                    <option value="process">PROCESS</option>
                    <option value="done">DONE</option>
                </select>
                <button class="bg-blue-600 text-white px-4 py-2 rounded ml-2">
                    Update
                </button>
            </form>

            <form action="{{ route('admin.complaints.destroy', $complaint->id) }}"
                  method="POST"
                  onsubmit="return confirm('Yakin hapus pengaduan ini?')">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 text-white px-4 py-2 rounded">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
