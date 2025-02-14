<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
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
}
