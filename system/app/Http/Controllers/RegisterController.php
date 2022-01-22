<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('backend.register.index');
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->nama = request('nama');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        if(request('level') == 'admin'){
            $user->level = '1';
        }elseif(request('level') == 'penjual'){
            $user->level = '2';
        }elseif(request('level') == 'pembeli'){
            $user->level = '3';
        }
        $user->save();

        return redirect('login');
    }





}
