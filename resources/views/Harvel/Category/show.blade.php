@extends('Master.Master')

@section('main')


    <div class="container">
        <h1 class="display-4">Admin Details</h1>
        @include('Harvel.Category.categoryDetails')
        <a type="button" href="{{route('category.index')}}" class="btn btn-info"><< Index</a>
    </div>
@endsection
