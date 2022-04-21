@extends('Master.Master')
@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <h1 class="display-4">Admin Details</h1>
        @include('Harvel.Admin.adminDetails')
        <a type="button" href="{{route('admin.index')}}" class="btn btn-info"><< Index</a>
    </div>
@endsection
