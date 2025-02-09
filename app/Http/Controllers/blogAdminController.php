<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class blogAdminController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::all();
        return view('admin.blog', $data);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'status' => 'required|in:aktif,tidak aktif',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // 10MB max
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('blog', 'public');
        }

        Blog::create($validatedData);

        // Redirect to a specific page after success
        return redirect()->route('admin.blog')->with('success', 'Blog berhasil ditambahkan!');
    }



    public function show($id)
    {
        $data['blog'] = Blog::findorfail($id);
        return view('admin.blog.show', $data);
    }

    public function edit($id)
    {
        $data['blog'] = Blog::findorfail($id);
        return view('admin.blog.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // 10MB max
        ]);

        // Temukan galeri berdasarkan ID
        $blog = Blog::findOrFail($id);

        // Jika ada gambar yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            // Upload gambar baru
            $path = $request->file('image')->store('public/blog'); // simpan di folder 'storage/app/public/galeri'
            $blog->image = str_replace('public/', '', $path); // Simpan path gambar di database tanpa 'public/'
        }
        // dd($request->status);
        // Update data lainnya
        $blog->judul = $request->input('judul');
        $blog->isi = $request->input('isi');
        $blog->status = $request->input('status');
        $blog->image = $request->input('image') ?? $blog->image;

        // Simpan perubahan
        $blog->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.blog')->with('success', 'Data galeri berhasil diupdate');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blog')->with('success', 'Data Berhasil Dihapus');
    }
}
