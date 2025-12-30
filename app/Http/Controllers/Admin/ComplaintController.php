<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::orderBy('id', 'desc')->paginate(10);
        return view('admin.complaints.index', compact('complaints'));
    }

    public function show(Complaint $complaint)
    {
        return view('admin.complaints.show', compact('complaint'));
    }

    public function updateStatus(Request $request, Complaint $complaint)
    {
        $request->validate([
            'status' => 'required|in:new,process,done',
        ]);

        $complaint->update([
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.complaints')
            ->with('success', 'Status berhasil diperbarui');
    }

    public function download(Complaint $complaint, $type)
    {
        if ($type === 'bukti' && $complaint->bukti_file) {
            return response()->download(
                storage_path('app/public/' . $complaint->bukti_file)
            );
        }

        if ($type === 'form' && $complaint->form_pengaduan) {
            return response()->download(
                storage_path('app/public/' . $complaint->form_pengaduan)
            );
        }

        abort(404);
    }

    public function destroy(Complaint $complaint)
    {
        $complaint->delete();

        return redirect()
            ->route('admin.complaints')
            ->with('success', 'Pengaduan berhasil dihapus');
    }
}
