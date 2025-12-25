<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComplaintController extends Controller
{
    public function create()
    {
        return view('public.pengaduan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pic'        => 'required|string|max:255',
            'nama_bpr'        => 'required|string|max:255',
            'email'           => 'required|email',
            'dpd'             => 'required|string',
            'whatsapp'        => 'required|string',
            'jenis_kendala'   => 'required|in:SIP,SB',
            'deskripsi'       => 'required|string',
            'bukti_file'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'form_pengaduan'  => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // === UPLOAD FILE (PASTI KEISI ATAU NULL JELAS) ===
        $buktiPath = null;
        if ($request->hasFile('bukti_file')) {
            $buktiPath = $request->file('bukti_file')
                ->store('complaints/bukti', 'public');
        }

        $formPath = null;
        if ($request->hasFile('form_pengaduan')) {
            $formPath = $request->file('form_pengaduan')
                ->store('complaints/form', 'public');
        }

        // === SIMPAN KE DATABASE ===
        Complaint::create([
            'nama_pic'        => $validated['nama_pic'],
            'nama_bpr'        => $validated['nama_bpr'],
            'email'           => $validated['email'],
            'dpd'             => $validated['dpd'],
            'whatsapp'        => $validated['whatsapp'],
            'jenis_kendala'   => $validated['jenis_kendala'],
            'deskripsi'       => $validated['deskripsi'],
            'bukti_file'      => $buktiPath,
            'form_pengaduan'  => $formPath,
            'status'          => 'new', // 🔴 INI PENTING
        ]);

        return back()->with('success', 'Pengaduan berhasil dikirim.');
    }
}
