<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kepengurusan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class KepengurusanController extends Controller
{
    public function show($id)
    {
        $kepengurusan = Kepengurusan::findOrFail($id);
        return view('detailkepengurusan', compact('kepengurusan'));
    }

    public function index()
    {
        $kepengurusans = Kepengurusan::latest()->get();
        return view('admin.kepengurusan.index', compact('kepengurusans'));
    }

    public function create()
    {
        return view('admin.kepengurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('kepengurusan', 'public');
        }

        Kepengurusan::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.kepengurusan.index')->with('success', 'Kepengurusan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kepengurusan = Kepengurusan::findOrFail($id);
        return view('admin.kepengurusan.edit', compact('kepengurusan'));
    }

    public function update(Request $request, $id)
    {
        $kepengurusan = Kepengurusan::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika ada gambar baru, hapus gambar lama
        if ($request->hasFile('image')) {
            $oldImagePath = storage_path('app/public/' . $kepengurusan->image);
            if ($kepengurusan->image && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('kepengurusan', 'public');
            $validated['image'] = $path;
        }

        $kepengurusan->update($validated);

        return redirect()->route('admin.kepengurusan.index')->with('success', 'Kepengurusan berhasil diperbarui');
    }


    public function destroy($id)
    {
        $kepengurusan = Kepengurusan::findOrFail($id);

        // Hapus file gambar jika ada
        if ($kepengurusan->image) {
            $imagePath = storage_path('app/public/' . $kepengurusan->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $kepengurusan->delete();

        return redirect()->route('admin.kepengurusan.index')->with('success', 'Kepengurusan berhasil dihapus');
    }
}
