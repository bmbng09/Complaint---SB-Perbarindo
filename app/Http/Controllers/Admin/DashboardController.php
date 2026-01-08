<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // total semua pengaduan
        $totalPengaduan = Complaint::count();

        // total berdasarkan jenis kendala
        $totalSIP = Complaint::where('jenis_kendala', 'SIP')->count();
        $totalSB  = Complaint::where('jenis_kendala', 'SB')->count();

        // total selesai
        $totalSelesai = Complaint::whereIn('status', ['Selesai', 'done', 'DONE'])->count();
        // $totalSelesai = Complaint::where('status', 'Selesai')->count();

        // chart perbandingan jenis kendala
        $chartJenis = Complaint::selectRaw('jenis_kendala, COUNT(*) as total')
            ->groupBy('jenis_kendala')
            ->pluck('total', 'jenis_kendala');

        // trend per bulan (12 bulan terakhir)
        $trend = Complaint::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        // ⚠️ PERHATIAN:
        // kolom yang dipakai di database harus: nama_bpr
        // ini sudah disesuaikan agar tidak error Unknown column `bpr`

        // TOP 5 BPR paling sering melakukan pengaduan
        $topBPR = Complaint::selectRaw('nama_bpr, COUNT(*) as total')
            ->groupBy('nama_bpr')
            ->orderByDesc('total')
            // ->limit(5)
            ->pluck('total', 'nama_bpr');

        // DETAIL mapping BPR -> jenis pengaduan terbanyak
        $bprJenisKendala = Complaint::selectRaw('nama_bpr, jenis_kendala, COUNT(*) as total')
            ->groupBy('nama_bpr', 'jenis_kendala')
            ->get();

        return view('admin.dashboard', compact(
            'totalPengaduan',
            'totalSIP',
            'totalSB',
            'totalSelesai',
            'chartJenis',
            'trend',
            'topBPR',
            'bprJenisKendala'
        ));
    }
}
