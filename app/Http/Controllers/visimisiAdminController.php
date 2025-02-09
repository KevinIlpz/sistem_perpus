<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;

class visimisiAdminController extends Controller
{
    public function index()
    {
        $visimisis = Visimisi::all(); // Mengambil semua data dari model Visimisi
        return view('admin.visimisi', compact('visimisis')); // Mengirimkan data ke view profile.blade.php
    }


    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'motto' => 'required',
        ]);

        Visimisi::create($validate);
        return redirect()->route('admin.visimisi')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $visimisi = Visimisi::findorfail($id);
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $data = Visimisi::find($id);
        $data->update($request->all());
        // Redirect setelah update berhasil
        return redirect()->route('admin.visimisi')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        $visimisi->delete();
        return redirect()->route('admin.visimisi')->with('success', 'Visimisi berhasil dihapus.');
    }
}
