@extends('backend.section.base')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card shadow ">
                    <div class="card-header ">
                        <h6 class="font-weight-bold text-primary">
                            Option User
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_user as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark"><i
                                                            class="fa fa-info"></i></a>
                                                    <a href="{{ url('admin/user', $user->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('backend.utils.delete', ['url' => url('admin/user',
                                                    $user->id)])
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
