@extends('backend.section.base')

@section('content_admin')
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card border-left-info shadow">
              <img src="{{ url("public/$produk->foto") }}" alt="" srcset="">
            </div>
          </div>
            <div class="col-md-8 ">
                <div class="card border-left-info shadow ">
                    <div class="card-header">
                        <h5>{{ $produk->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <h5>Harga <strong>{{ $produk->HargaString }}</strong></h5>
                        <p>
                            Berat :<strong>{{ $produk->berat }}</strong> | Stok :<strong>{{ $produk->stok }}</strong> 
                        </p>
                        <hr>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
