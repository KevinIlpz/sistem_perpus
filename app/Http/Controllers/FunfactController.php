<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Funfact;
use Illuminate\Http\Request;

class FunfactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funfacts = FunFact::all(); // Mengambil semua data fun facts
        return view('admin.funfact', compact('funfacts')); // Pastikan nama tampilan sesuai
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.funfact.create'); // Return the view to create a new funfact
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'siswa_teraktif' => 'required|string|max:255',
            'rayon_teraktif' => 'required|string|max:255',
            'rombel_teraktif' => 'required|string|max:255',
            'buku_terfavorit' => 'required|string|max:255',
        ]);

        Funfact::create($validatedData); // Create a new funfact

        return redirect()->route('admin.funfact')->with('success', 'Funfact created successfully.'); // Redirect with success message
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $funfact = Funfact::findOrFail($id); // Find the funfact by ID
    //     return view('admin.funfacts.show', compact('funfact')); // Return the view for showing a single funfact
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funfact = Funfact::findOrFail($id); // Find the funfact by ID
        return view('admin.funfact.edit', compact('funfact')); // Return the view to edit the funfact
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'siswa_teraktif' => 'required|string|max:255',
            'rayon_teraktif' => 'required|string|max:255',
            'rombel_teraktif' => 'required|string|max:255',
            'buku_terfavorit' => 'required|string|max:255',
        ]);

        $funfact = Funfact::findOrFail($id); // Find the funfact by ID
        $funfact->update($validatedData); // Update the funfact with validated data

        return redirect()->route('admin.funfact')->with('success', 'Funfact updated successfully.'); // Redirect with success message
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funfact = Funfact::findOrFail($id); // Find the funfact by ID
        $funfact->delete(); // Delete the funfact

        return redirect()->route('admin.funfact')->with('success', 'Funfact deleted successfully.'); // Redirect with success message
    }
}
