@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <div class="container">
        <h1 class="display-4">New Category</h1>
        @include('Harvel.partials.errors')

        <form action="{{route('category.store')}}" method="post">
            @csrf
            @include('Harvel.Category.categoryFields')
            <button type="submit" class="btn btn-dark">Submit</button>
            <a type="button" class="btn btn-danger" href="{{route('category.index')}}">Cancel</a>
        </form>
    </div>
@endsection
