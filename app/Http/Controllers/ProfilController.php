<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use Validator;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $profil = Profil::all();
        if ($profil->isEmpty) 
        {
            return response()->json([
                'data' => 'Data Profil Kosong',
                'error' => true,
            ], 404); //404 Not Found
        }

        return response()->json([
            'data' => $profil,
            'message' => 'Data Profil ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profil_id' => 'required|exists:profils,id',
            'judul_profil' => 'required|text',
            'isi_profil' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'image' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors(),
            ], 404);
        }

        $profil = Profil::create([
            'profil_id' => $request->profil_id,
            'judul_profil' => $request->judul_profil,
            'isi_profil' => $request->isi_profil,
            'status' => $request->status,
            'image' => $request->image,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Data Profil Berhasil ditambahkan',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil, string $id)
    {
        $profil = Profil::find($id);
        if(!$profil) {
            return response()->json([
                'data' => 'Data Profil Tidak Ditemukan',
                'error' => true
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'profil_id' => 'required|exists:profils,id',
            'judul_profil' => 'required|string|max:100',
            'isi_profil' => 'required|text',
            'status' => 'required|string|max:100',
            'image' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal melakukan update data profil',
                'data' => $validator->errors(),
            ], 400);
        }

        $profil->profil_id = $request->input('profil_id');
        $profil->judul_profil = $request->input('judul_profil');
        $profil->isi_profil = $request->input('isi_profil');
        $profil->status = $request->input('status');
        $profil->image = $request->input('image');

        $profil->save();

        return response()->json([
            'data' => 200,
            'message' => 'Data Profil Berhasil Diupdate',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil, string $id)
    {
        $profil = Profil::find($id);
        if(!$profil) {
            return response()->json([
                'status' => 400,
                'data' => 'Gagal Menghapus Data Profil',
            ], 400);
        }

        $profil->delete();

        return response()->json([
            'data' => 200,
            'message' => 'Data Profil Berhasil Dihapus',
        ], 200);
    }
}
