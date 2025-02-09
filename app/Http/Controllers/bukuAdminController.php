<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['books'] = Buku::all();
        return view('admin.buku', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer|min:1900|max:2099',
            'isbn' => 'required',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('bukus', 'public');
        }

        Buku::create($validate);

        return redirect()->route('admin.buku')->with('success', 'Book added successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $data['book'] = Book::findOrFail($id);
    //     return view('admin.books.show', $data);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['book'] = Buku::findOrFail($id);
        return view('admin.buku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Buku::findOrFail($id);

        $validate = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'isbn' => 'required',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($book->gambar) {
                Storage::disk('public')->delete($book->gambar);
            }
            $validate['gambar'] = $request->file('gambar')->store('bukus', 'public');
        } else {
            $validate['gambar'] = $book->gambar;
        }

        $book->update($validate);

        return redirect()->route('admin.buku')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Buku::findOrFail($id);

        if ($book->gambar) {
            Storage::disk('public')->delete($book->gambar);
        }

        $book->delete();

        return redirect()->route('admin.buku')->with('success', 'Book deleted successfully.');
    }
}
