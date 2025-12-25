<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ComplaintController extends Controller
{
    public function index()
    {
        // Lebih aman pakai ID DESC
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
            $path = storage_path('app/public/' . $complaint->bukti_file);

            if (File::exists($path)) {
                return response()->download($path);
            }
        }

        if ($type === 'form' && $complaint->form_pengaduan) {
            $path = storage_path('app/public/' . $complaint->form_pengaduan);

            if (File::exists($path)) {
                return response()->download($path);
            }
        }

        abort(404);
    }
    public function destroy(Complaint $complaint)
    {
    if ($complaint->bukti_file) {
        \Storage::disk('public')->delete($complaint->bukti_file);
    }

    if ($complaint->form_pengaduan) {
        \Storage::disk('public')->delete($complaint->form_pengaduan);
    }

    $complaint->delete();

    return redirect()
        ->route('admin.complaints')
        ->with('success', 'Pengaduan berhasil dihapus');
    }

}
