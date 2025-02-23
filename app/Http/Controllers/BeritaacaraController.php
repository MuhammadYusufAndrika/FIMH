<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\beritaacara;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class BeritaacaraController extends Controller
{
    public function index()
    {
        // Cek apakah request berasal dari admin URL
        if (request()->is('admin/*')) {
            // Halaman index untuk admin
            $beritaacaras = beritaacara::latest()->get()->map(function ($item) {
                $item->short_content = Str::limit(strip_tags($item->content), 150);
                return $item;
            });
            return view('admin.beritaacara.index', compact('beritaacaras'));
        } else {
            // Halaman index untuk publik
            $beritaacaras = beritaacara::latest()->get()->map(function ($item) {
                $item->short_content = Str::limit(strip_tags($item->content), 150);
                return $item;
            });
            return view('beritaacara', compact('beritaacaras'));
        }
    }


    public function show($id)
    {
        $beritaacara = beritaacara::findOrFail($id);
        return view('detailberitaacara', compact('beritaacara'));
    }

    public function create()
    {
        return view('admin.beritaacara.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('beritaacara', 'public');
        }

        beritaacara::create($validated);

        return redirect()->route('admin.beritaacara.index')->with('success', 'Berita Acara berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $beritaacara = beritaacara::findOrFail($id);
        return view('admin.beritaacara.edit', compact('beritaacara'));
    }

    public function update(Request $request, $id)
    {
        $beritaacara = beritaacara::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($beritaacara->image && Storage::exists('public/' . $beritaacara->image)) {
                Storage::delete('public/' . $beritaacara->image);
            }
            $validated['image'] = $request->file('image')->store('beritaacara', 'public');
        }

        $beritaacara->update($validated);

        return redirect()->route('admin.beritaacara.index')->with('success', 'Berita Acara berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $beritaacara = beritaacara::findOrFail($id);

        if ($beritaacara->image && Storage::exists('public/' . $beritaacara->image)) {
            Storage::delete('public/' . $beritaacara->image);
        }

        $beritaacara->delete();

        return redirect()->route('admin.beritaacara.index')->with('success', 'Berita Acara berhasil dihapus!');
    }
}
