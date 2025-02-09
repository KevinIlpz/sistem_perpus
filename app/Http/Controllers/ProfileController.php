<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;

class ProfileController extends Controller
{
    public function index()
    {
        $data['visimisis'] = Visimisi::all();
        return view('profile', $data);
    }


}
