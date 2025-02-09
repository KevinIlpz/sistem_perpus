<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Siswa;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamanAdminController extends Controller
{
    public function index()
    {
        $peminjamen = Peminjaman::with(['siswa', 'buku'])->get();
        return view('admin.peminjaman', compact('peminjamen'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $bukus = Buku::all();
        return view('admin.peminjaman.create', compact('siswas', 'bukus'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'buku_id' => 'required|exists:bukus,id',
            'tanggal_pinjam' => 'required|date',
            'estimasi_kembali' => 'required|date|after:tanggal_pinjam',
        ]);

            // Tambahkan nilai default untuk status
        $validate['status'] = 'dipinjam'; // Nilai default untuk status

        // Kurangi stok buku
        $buku = Buku::find($request->buku_id);
        if($buku->stok < 1) {
            return back()->with('error', 'Stok buku habis!');
        }
        $buku->decrement('stok');

        Peminjaman::create($validate);

        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $siswas = Siswa::all();
        $bukus = Buku::all();
        return view('admin.peminjaman.edit', compact('peminjaman', 'siswas', 'bukus'));
    }

    public function update(Request $request, $id)
{
    $peminjaman = Peminjaman::findOrFail($id);

    // Build validation rules
    $rules = [
        'siswa_id'          => 'required|exists:siswas,id',
        'buku_id'           => 'required|exists:bukus,id',
        // Use the original tanggal_pinjam from the model for date comparisons
        'estimasi_kembali'  => 'required|date|after:' . $peminjaman->tanggal_pinjam->format('Y-m-d'),
        'status'            => 'required|in:dipinjam,dikembalikan,terlambat',
    ];

    // If status is dikembalikan, require tanggal_kembali
    if ($request->status === 'dikembalikan') {
        $rules['tanggal_kembali'] = 'required|date|after:' . $peminjaman->tanggal_pinjam->format('Y-m-d');
    } else {
        $rules['tanggal_kembali'] = 'nullable|date|after:' . $peminjaman->tanggal_pinjam->format('Y-m-d');
    }

    $data = $request->validate($rules);

    // If the status is now "dikembalikan" and it was not returned before,
    // increase the stock of the book.
    if ($data['status'] === 'dikembalikan' && $peminjaman->status !== 'dikembalikan') {
        $buku = Buku::find($peminjaman->buku_id);
        $buku->increment('stok');
    }

    $peminjaman->update($data);

    return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Diubah');
}


    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->delete();

        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Dihapus');
    }
}
