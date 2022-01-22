<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
  public function index()
  {
    $data['list_produk'] = Produk::paginate(3);
    return view('frontend.home-page.index', $data);
  }

  public function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;

    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->paginate(3);

    return view('frontend.home-page.index', $data);
  }

  function filter2()
  {
    $harga_min = request('harga_min');
    $harga_max = request('harga_max');
    $data['harga_min'] = $harga_min;
    $data['harga_max'] = $harga_max;

    $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->paginate(3);
    return view('frontend.home-page.index', $data);
  }
}
