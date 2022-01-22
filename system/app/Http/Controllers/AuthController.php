<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.index');
    }

    public function process()
    {
        if(Auth::attempt(['email' =>request('email'), 'password' => request('password')])){
            $user = Auth::user();
            if($user->level == 1) return redirect('admin/dashboard/admin')->with('success', 'berhasil login sebagai admin');
            if($user->level == 2) return redirect('admin/dashboard/penjual')->with('success', 'berhasil login sebagai penjual');
            if($user->level == 3) return back();
        }else{
            return back()->with('danger', 'login anda gagal');
        }
    }

    public function logout()
    {
       Auth::logout();
       return redirect('login');
    }
}
