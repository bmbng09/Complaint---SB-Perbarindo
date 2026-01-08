<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // total semua pengaduan
        $totalComplaints = Complaint::count();

        // status menunggu
        $pendingComplaints = Complaint::where('status', 'Menunggu')->count();

        // status diproses
        $inProgressComplaints = Complaint::where('status', 'Diproses')->count();

        // status selesai
        $completedComplaints = Complaint::where('status', 'Selesai')->count();

        // pengaduan terbaru
        $latestComplaints = Complaint::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalComplaints',
            'pendingComplaints',
            'inProgressComplaints',
            'completedComplaints',
            'latestComplaints'
        ));
    }
}
