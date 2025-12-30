<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function create()
    {
        return view('public.pengaduan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pic'        => 'required|string',
            'nama_bpr'        => 'required|string',
            'email'           => 'required|email',
            'dpd'             => 'required|string',
            'whatsapp'        => 'required|string',
            'jenis_kendala'   => 'required|in:SIP,SB',
            'deskripsi'       => 'required|string',
            'bukti_file'      => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'form_pengaduan'  => 'nullable|file|mimes:pdf',
        ]);

        if ($request->hasFile('bukti_file')) {
            $validated['bukti_file'] =
                $request->file('bukti_file')->store('bukti', 'public');
        }

        if ($request->hasFile('form_pengaduan')) {
            $validated['form_pengaduan'] =
                $request->file('form_pengaduan')->store('form_pengaduan', 'public');
        }

        $validated['status'] = 'Menunggu';

        Complaint::create($validated);

        return redirect()
            ->route('pengaduan')
            ->with('success', 'Pengaduan berhasil dikirim dan akan segera diproses.');
    }
}
