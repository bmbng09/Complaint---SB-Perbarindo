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

    // public function exportCsv()
    // {
    //     $complaints = Complaint::orderBy('id', 'desc')->get();

    //     $filename = "complaints.csv";

    //     $handle = fopen('php://temp', 'r+');

    //     fputcsv($handle, [
    //         'ID',
    //         'Nama Pelapor',
    //         'Email',
    //         'No HP',
    //         'Isi Pengaduan',
    //         'Status',
    //         'Tanggal Dibuat'
    //     ]);

    //     foreach ($complaints as $c) {
    //         fputcsv($handle, [
    //             $c->id,
    //             $c->name ?? '',
    //             $c->email ?? '',
    //             $c->phone ?? '',
    //             $c->message ?? '',
    //             $c->status ?? '',
    //             $c->created_at ? $c->created_at->format('Y-m-d H:i:s') : '',
    //         ]);
    //     }

    //     rewind($handle);
    //     $contents = stream_get_contents($handle);
    //     fclose($handle);

    //     return response($contents, 200, [
    //         'Content-Type' => 'text/csv',
    //         'Content-Disposition' => 'attachment; filename="'.$filename.'"'
    //     ]);
    // }
    public function exportCsv()
{
    $complaints = Complaint::all();

    $filename = 'complaints_' . date('Y-m-d_H-i-s') . '.csv';

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => "attachment; filename=\"$filename\"",
    ];

    $callback = function () use ($complaints) {
        $file = fopen('php://output', 'w');

        fputcsv($file, [
            'ID',
            'Tanggal',
            'Nama BPR',
            'DPD',
            'Jenis Kendala',
            'Deskripsi',
            'Status'
        ]);

        foreach ($complaints as $c) {
            fputcsv($file, [
                $c->id,
                $c->created_at,
                $c->nama_bpr,
                $c->dpd,
                $c->jenis_kendala,
                $c->deskripsi,
                $c->status
            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}

public function export($format)
{
    if ($format === 'csv') {
        return $this->exportCsv();
    }

    abort(404);
}

}
