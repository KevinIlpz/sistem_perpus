<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class userAdminController extends Controller
{
    public function index()
    {
        $data['users'] = user::all();
        return view('admin.user', $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        user::create($validate);
        return redirect()->route('admin.user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data['user'] = user::findorfail($id);
        return view('admin.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = user::find($id);
        $data->update($request->all());
        // Redirect setelah update berhasil
        return redirect()->route('admin.user')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user')->with('success', 'Data Berhasil Dihapus');
    }
}
