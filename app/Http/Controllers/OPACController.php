<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OPACController extends Controller
{
    public function index()
    {
        // Fetch all books from the database
        $books = Buku::all();

        // Pass the books to the view
        return view('opac', ['books' => $books]);
    }

}
