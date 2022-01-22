@extends('frontend.section.base')

@section('client_content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ url("public/$produk->foto") }}"
                        alt="..." /></div>
                <div class="col-md-6">

                    <h4 class=" fw-bolder">{{ $produk->nama }}</h4>
                    <div class="fs-5 mb-2">
                        <span> {{ $produk->HargaString }}</span>
                    </div>
                    <div class="small mb-1">
                        Seller :<strong>{{ $produk->seller->nama }} </strong>
                    </div>
                    <div class="small mb-1">
                        Berat :<strong>{{ $produk->berat }}</strong>
                        Stok :<strong>{{ $produk->stok }}</strong>
                    </div>
                    <p class="lead">
                        {!! nl2br($produk->deskripsi) !!}
                    </p>
                    <div class="d-flex">
                        <a href="{{ url('checkout') }}" class="btn btn-outline-dark flex-shrink-0"> <i class="bi-cart-fill me-1"></i>
                            Buyy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
