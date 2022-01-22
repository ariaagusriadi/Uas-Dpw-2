<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('frontend.CheckOut.index', $data);
    }
}
