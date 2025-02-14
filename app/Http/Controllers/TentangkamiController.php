<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Description;
use App\Models\tentangkami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TentangkamiController extends Controller
{
    public function index()
    {
        $tentangkami = Tentangkami::all();
        return view('admin.tentangkami.index', compact('tentangkami'));
    }

    public function create()
    {
        return view('admin.tentangkami.create'); // Sesuaikan dengan nama folder
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Tentangkami::create($request->all());

        return redirect()->route('admin.tentangkami.index')->with('success', 'Created successfully.');
    }

    public function edit(Tentangkami $tentangkami) // Pastikan parameter sesuai
    {
        return view('admin.tentangkami.edit', compact('tentangkami'));
    }

    public function update(Request $request, Tentangkami $tentangkami)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $tentangkami->update($request->all());

        return redirect()->route('admin.tentangkami.index')->with('success', 'Updated successfully.');
    }

    public function destroy(Tentangkami $tentangkami)
    {
        $tentangkami->delete();
        return redirect()->route('admin.tentangkami.index')->with('success', 'Deleted successfully.');
    }
}