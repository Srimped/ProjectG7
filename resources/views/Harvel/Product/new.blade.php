@extends('Master.Master')

@section('main')
    <div class="create-form">
        <h3 style="text-align: center;">Create New Product</h3>
{{--        @include('partials.Errors')--}}
        <form action="" method="post">
            @csrf
            @include('Harvel.Product.formField')
        </form>
    </div>
@endsection
