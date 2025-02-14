<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Service;
use DeepCopy\f013\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\VisiMisi;

class VisimisiController extends Controller
{
    public function index()
    {
        $visi = VisiMisi::whereNotNull('visi')->pluck('visi');
        $misi = VisiMisi::whereNotNull('misi')->pluck('misi');
        $visimisi = VisiMisi::all();

        return view('admin.visimisi.index', compact('visi', 'misi', 'visimisi'));
    }


    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|string|max:255',
            'misi' => 'required|string',
        ]);

        VisiMisi::create($request->all());

        return redirect()->route('admin.visimisi.index')->with('success', 'visimisi created successfully.');
    }

    public function edit($id)
    {
        $visimisi = VisiMisi::where('id', $id)->firstOrFail();
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required|string|max:255',
            'misi' => 'required|string',
        ]);

        $visimisi = VisiMisi::where('id', $id)->firstOrFail();
        $visimisi->update($request->only(['visi', 'misi']));

        return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi updated successfully.');
    }


    public function destroy($id)
    {
        $visimisi = VisiMisi::where('id', $id)->firstOrFail();
        $visimisi->delete();

        return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi deleted successfully.');
    }
}
