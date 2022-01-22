@extends('backend.section.base')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card shadow border-left-warning ">
                    <div class="card-header">
                        <h6 class="font-weight-bold text-primary">
                            Edit user
                        </h6>
                    </div>
                    <div class="card-body">
                        <form class="user" method="POST" action="{{ url('admin/user', $user->id) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Nama" name="nama" value="{{ $user->nama }}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address" name="email" value="{{ $user->email }}" >
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder=" Admin - penjual - pembeli "
                                        name="level">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">Edit Account</button>
                        </form>
                    </div>
                </div>           
            </div>
        </div>
    </div>
@endsection
