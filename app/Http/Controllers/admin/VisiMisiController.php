<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisis = VisiMisi::where('type', 'visi_misi')->get();
        return view('admin.visimisi.index', compact('visimisis'));
    }

    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        VisiMisi::create(array_merge($request->all(), ['type' => 'visi_misi']));

        return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi created successfully.');
    }

    public function edit(VisiMisi $visimisi)
    {
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, VisiMisi $visimisi)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $visimisi->update($request->all());

        return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi updated successfully.');
    }

    public function destroy(VisiMisi $visimisi)
    {
        $visimisi->delete();
        return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi deleted successfully.');
    }
}
