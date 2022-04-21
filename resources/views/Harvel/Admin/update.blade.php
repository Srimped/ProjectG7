@extends('Master.Master')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Admin</h1>

        @include('Harvel.partials.errors')

        <form action="{{route('admin.update', ['Ad_Id' => old('Ad_Id')?? $admin->Ad_Id])}}" method="post">
            @csrf
            @include('Harvel.Admin.adminFields')
            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
