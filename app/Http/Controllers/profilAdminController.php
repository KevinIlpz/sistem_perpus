<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profils'] = Profil::all();
        return view('admin.profil',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul_profil' => 'required',
            'isi_profil' => 'required',
            'status' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $validate['gambar'] = $request->file('gambar')->store('profil', 'public');
        Profil::create($validate);
        return redirect()->route('admin.profil' )->with('success', 'Data Profil Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['profil'] = Profil::findorfail($id);
        return view('admin.profil.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the profil by id or fail
        $profil = Profil::findOrFail($id);
        // Validate the incoming request
        $validate = $request->validate([
            'judul_profil' => 'required',
            'isi_profil' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image
        ]);
        // Check if a new image file is being uploaded
        if ($request->hasFile('gambar')) {
            // Delete the old image if it exists
            if ($profil->gambar) {
                Storage::disk('public')->delete($profil->gambar);
            }
            // Store the new image and update the validate array
            $validate['gambar'] = $request->file('gambar')->store('profil', 'public');
        } else {
            // If no new image is uploaded, retain the old image path
            $validate['gambar'] = $profil->gambar;
        }

        // Update the profil with validated data
        $profil->update($validate);

        return redirect()->route('admin.profil')->with('success', 'Data Profil berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();

        return redirect()->route('admin.profil')->with('success', 'Data Profil berhasil dihapus.');
    }
}
