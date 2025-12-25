<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;

class DashboardController extends Controller
{
    public function index()
    {
        $total = Complaint::count();

        $sip = Complaint::where('jenis_kendala', 'SIP')->count();
        $sb  = Complaint::where('jenis_kendala', 'SB')->count();

        $latest = Complaint::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'total',
            'sip',
            'sb',
            'latest'
        ));
    }
}
