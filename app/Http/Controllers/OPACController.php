<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OPACController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $books = Buku::when($search, function ($query) use ($search) {
            return $query->where('judul', 'like', "%$search%")
                         ->orWhere('penulis', 'like', "%$search%")
                         ->orWhere('penerbit', 'like', "%$search%")
                         ->orWhere('isbn', 'like', "%$search%");
        })->get();

        return view('opac', ['books' => $books]);
    }
}