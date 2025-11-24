<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiFakultas; // <-- WAJIB TAMBAHKAN

class VisiMisiFakultasController extends Controller
{
    public function index()
    {
        $data = VisiMisiFakultas::all();
        return view('fakultas.index', compact('data'));
    }
    public function create()
    {
        return view('fakultas.create');
    }
    public function store(Request $request)
    {
        VisiMisiFakultas::create($request->all());
        return redirect()->route('fakultas.index');
    }
    public function edit(string $id)
    {
        $item = VisiMisiFakultas::findOrFail($id);
        return view('fakultas.edit', compact('item'));
    }
    public function update(Request $request, string $id)
    {
        VisiMisiFakultas::findOrFail($id)->update($request->all());
        return redirect()->route('fakultas.index');
    }
    public function destroy(string $id)
    {
        VisiMisiFakultas::findOrFail($id)->delete();
        return redirect()->route('fakultas.index');
    }
}
