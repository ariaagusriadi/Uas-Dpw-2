@extends('backend.section.base')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card shadow ">
                    <div class="card-header ">
                        <h6 class="font-weight-bold text-primary">
                            Options Produk
                            <a href="{{ url('admin/produk/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Add Produk</a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_produk as $produk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $produk->nama }}</td>
                                            <td>{{ $produk->harga }}</td>
                                            <td>{{ $produk->stok }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/produk', $produk->uuid) }}" class="btn btn-dark"><i
                                                            class="fa fa-info"></i></a>
                                                    <a href="{{ url('admin/produk', $produk->uuid) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('backend.utils.delete', ['url' => url('admin/produk',
                                                    $produk->uuid)])
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
