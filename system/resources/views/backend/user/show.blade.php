@extends('backend.section.base')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 ">
                <div class="card border-left-info shadow ">
                    <div class="card-header">
                        detail user
                    </div>
                    <div class="card-body">
                        <h5>Nama : {{ $user->nama }}</h5>
                        <hr>
                        <h5>Email : {{ $user->email }}</h5>
                        <hr>
                        <h5>Positions :    @if ($user->level == '1')
                          admin
                      @elseif ($user->level == '2')
                          Penjual
                      @elseif ($user->level == '3')
                          Pembeli
                      @endif</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
