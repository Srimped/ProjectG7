@extends('Master.Master')

@section('main')

    <div class="container">
        <h1 class="display-4">Product Details</h1>
        @include('Harvel.Product.productDetails')
        <a type="button" href="{{route('product.index')}}" class="btn btn-info"><< Index</a>
    </div>
@endsection
