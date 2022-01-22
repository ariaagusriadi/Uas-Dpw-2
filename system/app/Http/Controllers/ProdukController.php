<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('backend.produk.index', $data);
    }


    public function create()
    {
        return view('backend.produk.create');
    }


    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->foto = request('foto');
        $produk->harga = request('harga');
        $produk->stok = request('stok');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'produk berhasil di tambahkan');
    }


    public function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('backend.produk.show', $data);
    }


    public function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('backend.produk.edit', $data);
    }

    public function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->stok = request('stok');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        if (request('foto')) $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'produk berhasil di edit');
    }


    public function destroy(Produk $produk)
    {
        $produk->handleDeleteFoto();
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'produk berhasil di hapus');
    }

    public function showdata()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('backend.produk.dataproduk', $data);
    }
}
