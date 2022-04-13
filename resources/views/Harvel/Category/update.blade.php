@extends('Master.Master')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Category</h1>


        @include('Harvel.partials.errors')

        <form action="{{route('category.update', ['Cate_Id' => old('Cate_Id')?? $category->Cate_Id])}}" method="post">
            @csrf
            @include('Harvel.Category.categoryFields')

            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
