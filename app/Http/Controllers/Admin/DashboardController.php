<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // CARD STATISTIC
        $totalPengaduan = Complaint::count();
        $totalSIP       = Complaint::where('jenis_kendala', 'SIP')->count();
        $totalSB        = Complaint::where('jenis_kendala', 'SB')->count();
        $totalSelesai   = Complaint::where('status', 'done')->count();
        $totalProses    = Complaint::where('status', 'process')->count();
        $totalBaru      = Complaint::where('status', 'new')->count();

        // CHART JENIS KENDALA
        $chartJenis = Complaint::select(
                'jenis_kendala',
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('jenis_kendala')
            ->pluck('total', 'jenis_kendala');

        // TREND BULANAN
        $trend = Complaint::select(
                DB::raw('MONTH(created_at) as bulan'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->pluck('total', 'bulan');

        return view('admin.dashboard', compact(
            'totalPengaduan',
            'totalSIP',
            'totalSB',
            'totalSelesai',
            'totalProses',
            'totalBaru',
            'chartJenis',
            'trend'
        ));
    }
}
