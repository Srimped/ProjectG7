@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="create-form">
        <h3 style="text-align: center;">Modify Classroom</h3>
        @include('Harvel.partials.Errors')

        <form action="{{route('product.update', ['Prod_Id' => old('Prod_Id')?? $product->Prod_Id])}}" method="post">
            @csrf
            @include('Harvel.Product.productFields')
        </form>
    </div>
@endsection
