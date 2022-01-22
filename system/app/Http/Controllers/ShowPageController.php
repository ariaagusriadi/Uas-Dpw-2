<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ShowPageController extends Controller
{
    public function index(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontend.shop-page.index', $data);
    }
}
