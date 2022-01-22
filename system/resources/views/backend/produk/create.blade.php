@extends('backend.section.base')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card shadow border-left-warning ">
                    <div class="card-header">
                        <h6 class="font-weight-bold text-primary">
                            Add Produk
                        </h6>
                    </div>
                    <div class="card-body">
                        <form class="user" method="POST" action="{{ url('admin/produk') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="file" class="form-control" name="foto" accept=".png,.jpg">
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" placeholder="harga"
                                        name="harga">
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" placeholder="berat"
                                        name="berat">
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" placeholder="stok"
                                        name="stok">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="" cols="30" rows="10"
                                    class="form-control sumernote"></textarea>
                            </div>
                            <button class="btn btn-primary btn-user btn-block"><i class="fa fa-save"></i> Add
                                produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script_backend')
    <script>
        $('.sumernote').summernote({
            placeholder: 'Add Deskripsi ',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
@endpush


