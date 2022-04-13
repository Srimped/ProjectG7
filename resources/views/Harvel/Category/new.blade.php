@extends('Master.Master')

@section('main')
    <div class="container">
        <h1 class="display-4">New Category</h1>
        @include('Harvel.partials.errors')

        <form action="{{route('category.store')}}" method="post">
            @csrf
            @include('Harvel.Category.categoryFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
