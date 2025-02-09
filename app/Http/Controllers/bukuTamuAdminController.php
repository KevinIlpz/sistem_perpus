<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bukutamu;

class bukuTamuAdminController extends Controller
{
    public function index()
    {
        $data['bukutamus'] = bukutamu::all();

        return view('admin.bukutamu', $data);
    }

    public function create()
    {
        return view('admin.bukutamu.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'tanggal' => 'required',
            'pesan' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        bukutamu::create($validate);
        return redirect()->route('admin.bukutamu')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['bukutamu'] = bukutamu::findorfail($id);
        return view('admin.bukutamu.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $data = bukutamu::find($id);
        $data->update($request->all());
        // Redirect setelah update berhasil
        return redirect()->route('admin.bukutamu')->with('success', 'Data Berhasil Diupdate');
    }
    

    public function destroy($id)
    {
        $bukutamu = Bukutamu::findOrFail($id);
        $bukutamu->delete();
    
        return redirect()->route('admin.bukutamu')->with('success', 'Buku tamu berhasil dihapus.');
    }
    
}
