<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiInstitusi; // <-- WAJIB TAMBAHKAN

class VisiMisiInstitusiController extends Controller
{
    public function index()
    {
        $data = VisiMisiInstitusi::all();
        return view('institusi.index', compact('data'));
    }

    public function create()
    {
        return view('institusi.create');
    }

    public function store(Request $request)
    {
        VisiMisiInstitusi::create($request->all());
        return redirect()->route('institusi.index');
    }

    public function edit($id)
    {
        $item = VisiMisiInstitusi::findOrFail($id);
        return view('institusi.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        VisiMisiInstitusi::findOrFail($id)->update($request->all());
        return redirect()->route('institusi.index');
    }

    public function destroy($id)
    {
        VisiMisiInstitusi::findOrFail($id)->delete();
        return redirect()->route('institusi.index');
    }
}
