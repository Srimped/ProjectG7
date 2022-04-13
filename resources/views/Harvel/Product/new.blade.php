@extends('Master.Master')

@section('main')
    <div class="create-form">
        <h3 style="text-align: center;">Create New Product</h3>
        @include('Harvel.partials.Errors')
        <form action="" method="post">
            @csrf
            @include('Harvel.Product.productFields')
        </form>
    </div>
@endsection
