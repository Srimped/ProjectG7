@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('Harvel.Category.categoryDetails')

        <form action="{{route('category.destroy', ['Cate_Id' =>$category->Cate_Id])}}" method="post">
            @csrf
            <input type="hidden" name="Cate_Id" value="{{$category->Cate_Id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
