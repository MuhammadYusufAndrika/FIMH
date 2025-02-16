<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Routing\Controller;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest()->get();
        return view('admin.aspirasi.index', compact('aspirasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'angkatan' => 'required|string',
            'kelas' => 'required|string',
            'subjek' => 'required|string',
            'pesan' => 'required|string',
        ]);

        Aspirasi::create($request->all());
        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim');
    }

    // ✅ Fungsi Export CSV
    public function export(): BinaryFileResponse
    {
        $fileName = 'aspirasi-' . now()->format('YmdHis') . '.csv';
        $filePath = storage_path('app/' . $fileName);

        // Buat file CSV
        $writer = SimpleExcelWriter::create($filePath)
            ->addHeader(['ID', 'Angkatan', 'Kelas', 'Subjek', 'Pesan', 'Tanggal']);

        Aspirasi::all()->each(function ($aspirasi) use ($writer) {
            $writer->addRow([
                $aspirasi->id,
                $aspirasi->angkatan,
                $aspirasi->kelas,
                $aspirasi->subjek,
                $aspirasi->pesan,
                $aspirasi->created_at->format('d-m-Y H:i'),
            ]);
        });

        $writer->close();

        // Return sebagai BinaryFileResponse
        return response()->download($filePath)->deleteFileAfterSend(true);
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->input('ids');
        if ($ids) {
            Aspirasi::whereIn('id', $ids)->delete();
            return redirect()->route('admin.aspirasi.index')->with('success', 'Data aspirasi terpilih berhasil dihapus.');
        }
        return redirect()->route('admin.aspirasi.index')->with('warning', 'Tidak ada data yang dipilih untuk dihapus.');
    }
    // ✅ Fungsi untuk menghapus semua data aspirasi
    public function clearAll()
    {
        Aspirasi::truncate();
        return redirect()->route('admin.aspirasi.index')->with('success', 'Semua data aspirasi berhasil dihapus.');
    }
}
