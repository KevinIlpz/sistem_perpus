<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistik;
use Validator;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $statistik = Statistik::all();
        if ($statistik->isEmpty) 
        {
            return response()->json([
                'data' => 'Data Statistik Kosong',
                'error' => true,
            ], 404); //404 Not Found
        }

        return response()->json([
            'data' => $statistik,
            'message' => 'Data Statistik ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ip' => 'required|integer|max:15',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors(),
            ], 404);
        }

        $statistik = Statistik::create([
            'ip' => $request->ip,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Data Statistik Berhasil Ditambahkan'
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
    public function show(Statistik $statistik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistik $statistik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistik $statistik, string $id)
    {
        $statistik = Statistik::find($id);

        if (!$statistik) {
            return response()->json([
                'error' => true,
                'message' =>  'Data Statistik tidak ditemukan',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'ip' => 'required|integer|max:15',
            'tanggal' => 'required|date',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal Melakukan update data Statistik',
                'data' => $validator->errors(),
            ], 400);
        }

        $statistik->ip = $request->input('ip');
        $statistik->tanggal = $request->input('tanggal');
        
        $statistik->save();
        
        return response()->json([
            'data' => 200,
            'message' => 'Data Statistik Berhasil Diupdate',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistik $statistik, string $id)
    {
        $statistik = Statistik::find($id);
        if(!$statistik) {
            return response()->json([
                'data' => 'Data Statistik Tidak Ditemukan',
                'error' => true
            ], 404);
        }

        $statistik->delete();

        return response()->json([
            'data' => 200,
            'message' => 'Data Statistik Berhasil Dihapus',
        ], 200);
    }
}
