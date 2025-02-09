<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $artikel = Artikel::all();
        if ($artikel->isEmpty) 
        {
            return response()->json([
                'data' => 'Data Artikel Kosong',
                'error' => true
            ], 404);
        }

        return response()->json([
            'data' => $artikel,
            'message' => 'Data Artikel Ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'artikel_id' => 'requires|exists:artikel,id',
            'judul_artikel' => 'required|string|max:255',
            'isi_artikel' => 'required|text',
            'image' => 'required|image',
            'status' => 'required|status|enum'
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 404,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors(),
            ]);    
        }

        $artikel = Artikel::create([
            'artikel_id' => $request->artikel_id,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'image' => $request->image,
            'status' => $request->status,
        ]);

        return response()->json([
            'data' => 200,
            'message' => 'Data Artikel Berhasil ditambahkan'
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
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel, string $id)
    {
        $artikel = Artikel::find($id);

        if (!$artikel) {
            return response()->json([
                'status' => 400,
                'message' => 'Data Artikel tidak ditemukan',
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'artikel_id' => 'requires|exists:artikel,id',
            'judul_artikel' => 'required|string|max:255',
            'isi_artikel' => 'required|text',
            'image' => 'required|image',
            'status' => 'required|status|enum'
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal Melakukan update data Artikel',
                'data' => $validator->errors(),
            ], 400);
        }

        $artikel->artikel_id = $request->input('artikel_id');
        $artikel->judul_artikel = $request->input('judul_artikel');
        $artikel->isi_artikel = $request->input('isi_artikel');
        $artikel->image = $request->input('image');
        $artikel->status = $request->input('status');

        $artikel->save();

        return response()->json([
            'data' => 200,
            'message' => 'Data Artikel Berhasil diupdate'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel, string $id)
    {
        $artikel = Artikel::find($id);

        if (!$artikel) 
        {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal Mengahapus Data Artikel',
            ], 400);
        }

        $artikel->delete();

        return response()->json([
            'data' => 200,
            'message' => 'Data Artikel Berhasil dihapus'
        ], 200);   
    }
}
