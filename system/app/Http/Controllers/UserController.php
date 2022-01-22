<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $data['list_user'] = User::withCount('produk')->get();
        return view('backend.user.index', $data);
    }

    public function show(User $user)
    {
        $data['user'] = $user;
        return view('backend.user.show', $data);
    }

    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('backend.user.edit', $data);
    }

    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->email = request('email');
        if (request('password')) $user->password = bcrypt(request('password'));
        if (request('level') == 'admin') {
            $user->level = '1';
        } elseif (request('level') == 'penjual') {
            $user->level = '2';
        } elseif (request('level') == 'pembeli') {
            $user->level = '3';
        }
        $user->save();

        return redirect('admin/user')->with('success', 'berhasil di edit');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', ' berhasil di hapus');
    }

    public function showdata()
    {
        $data['list_user']= User::withCount('produk')->get();
        return view('backend.user.datauser', $data);
    }
}
