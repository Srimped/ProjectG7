@extends('Master.Master')

@section('main')

    <div class="container">
        <h1 class="display-4">Product Details</h1>
        @include('Harvel.productDetails')
        <a type="button" href="{{route('allproduct.index')}}" class="btn btn-info"><< Back</a>
    </div>
@endsection
