@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-6">

    <h2 class="text-2xl font-bold text-green-700 mb-6">
        Daftar Pengaduan BPR / BPRS
    </h2>

    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">Tanggal</th>
                    <th class="px-4 py-3 text-left">BPR</th>
                    <th class="px-4 py-3">DPD</th>
                    <th class="px-4 py-3">Jenis</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($complaints as $c)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">
                        {{ $c->created_at?->format('d/m/Y H:i') }}
                    </td>

                    <td class="px-4 py-2">
                        {{ $c->nama_bpr }}
                    </td>

                    <td class="px-4 py-2 text-center">
                        {{ $c->dpd }}
                    </td>

                    <td class="px-4 py-2 text-center">
                        <span class="px-2 py-1 rounded text-white text-xs
                            {{ $c->jenis_kendala === 'SB' ? 'bg-green-600' : 'bg-blue-600' }}">
                            {{ $c->jenis_kendala }}
                        </span>
                    </td>

                    <td class="px-4 py-2 text-center">
                        <span class="px-2 py-1 rounded text-xs
                            @if($c->status === 'new') bg-yellow-100 text-yellow-800
                            @elseif($c->status === 'process') bg-blue-100 text-blue-800
                            @else bg-green-100 text-green-800 @endif">
                            {{ strtoupper($c->status ?? 'NEW') }}
                        </span>
                    </td>

                    <td class="px-4 py-2 text-center">
                        <a href="{{ route('admin.complaints.show', $c->id) }}"
                           class="text-green-600 hover:underline font-medium">
                            Detail
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-6 text-gray-500">
                        Belum ada pengaduan masuk
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $complaints->links() }}
    </div>
</div>
@endsection
