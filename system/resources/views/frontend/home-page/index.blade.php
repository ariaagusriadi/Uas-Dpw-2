@extends('frontend.section.base')

@section('client_content')

    <header class="masthead" style="background-image: url({{ url('public/front/home/assets/1.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>gadget shop</h1>
                        <span class="subheading">A shop for gadget</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5">
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                Filter
                            </div>
                            <div class="card-body">

                                <form action="{{ url('home/filter') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama produk</label>
                                        <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                                    </div>
                                    <br>
                                    <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                                </form>


                            </div>
                            <div class="card-body">
                                <form action="{{ url('home/filter2') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">harga min</label>
                                                <input type="number" class="form-control" name="harga_min"
                                                    value="{{ $harga_min ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">harga max</label>
                                                <input type="number" class="form-control" name="harga_max"
                                                    value="{{ $harga_max ?? '' }}">
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                                </form>
                            </div>

                        </div>
                    </div>


                    @foreach ($list_produk as $produk)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                    Sale</div>
                                <!-- Product image-->
                                <img src="{{ url("public/$produk->foto") }}" alt="" srcset="">
                                <!-- Product details-->
                                <div class="card-body p-4">

                                    <div class="text-center">
                                        <!-- Product name-->
                                        <a href="{{ url('shop', $produk->uuid) }}" style="text-decoration: none">
                                            <h5 class="fw-bolder">{{ $produk->nama }}</h5>
                                        </a>
                                        <!-- Product price-->
                                        {{ $produk->HargaString }}
                                    </div>

                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="{{ url('shop', $produk->uuid) }}">Preview</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col md-12">
                    {{ $list_produk->links() }}
                </div>
            </div>
        </section>
    </div>


    {{-- <script>
        $(document).ready(function() {
            tampildata();
        });
    
        function tampildata() {
            $('#table').html('');
            $.ajax({
                url: "{{ route('tampildata') }}",
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, values) {
                        // console.log(data[key].uuid);
                        nama = data[key].nama;
                        harga = data[key].harga;
                        berat = data[key].berat;
                        foto = data[key].fot;
                        $('#table').append('<tr>\
                           <td>'+nama+'</td>\
                           <td>'+harga+'</td>\
                           <td>'+berat+'</td>\
                           <td><img src="'+foto+'" alt="" srcset=""></td>\
                          </tr>');
                    });
                }
            });
        }
    </script> --}}

@endsection
