<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AspirasiExportController extends Controller
{
    public function export(): StreamedResponse
    {
        $fileName = 'aspirasi-' . now()->format('YmdHis') . '.csv';

        return response()->streamDownload(function () {
            $writer = SimpleExcelWriter::create('php://output')
                ->addHeader(['ID', 'Nama', 'Email', 'Pesan', 'Tanggal']);

            Aspirasi::all()->each(function ($aspirasi) use ($writer) {
                $writer->addRow([
                    $aspirasi->id,
                    $aspirasi->nama,
                    $aspirasi->email,
                    $aspirasi->pesan,
                    $aspirasi->created_at->format('Y-m-d H:i:s'),
                ]);
            });

            $writer->toBrowser();
        }, $fileName);
    }
}
