@extends('backend.section.base')

@section('content_admin')
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">Page not for you</p>
        <a href="{{ url('admin/dashboard/{status}') }}">&larr; Back to Dashboard</a>
    </div>
@endsection
