<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        // Check if a search term is present
        if ($request->has('search') && $request->search) {
            $query->where('judul', 'LIKE', '%' . $request->search . '%')
                ->orWhere('isi', 'LIKE', '%' . $request->search . '%');
        }

        $data['blogs'] = $query->get();
        return view('blog', $data);
    }


    public function show($id)
    {
        $data['blog'] = Blog::findorfail($id);
        return view('show', $data);
    }
}
