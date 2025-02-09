<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaAdminController extends Controller
{
    // Index - Show all siswa
    public function index()
    {
        $data['siswas'] = Siswa::all();
        return view('admin.siswa', $data);
    }

    // Create - Show create form
    public function create()
    {
        return view('admin.siswa.create');
    }

    // Store - Save new siswa
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|unique:siswas,nis|max:20',
            'rayon' => 'required|string|max:100',
            'rombel' => 'required|string|max:100',
        ]);

        Siswa::create($validate);

        return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil ditambahkan.');
    }

    // Edit - Show edit form
    public function edit($id)
    {
        $data['siswa'] = Siswa::findOrFail($id);
        return view('admin.siswa.edit', $data);
    }

    // Update - Update existing siswa
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validate = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:siswas,nis,' . $siswa->id,
            'rayon' => 'required|string|max:100',
            'rombel' => 'required|string|max:100',
        ]);

        $siswa->update($validate);

        return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil diperbarui.');
    }

    // Destroy - Delete siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil dihapus.');
    }
}
