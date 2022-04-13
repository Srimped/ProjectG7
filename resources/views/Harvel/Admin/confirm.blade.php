@extends('Master.Master')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('Harvel.Admin.adminDetails')

        <form action="{{route('admin.destroy', ['Ad_Id' =>$admin->Ad_Id])}}" method="post">
            @csrf
            <input type="hidden" name="Ad_Id" value="{{$admin->Ad_Id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
