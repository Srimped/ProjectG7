@extends('Master.Master')

@section('main')
    <div class="create-form">
        <h3 style="text-align: center;">Modify Classroom</h3>
        @include('Harvel.partials.Errors')

        <form action="{{route('product.update', ['Prod_Id' => old('Prod_Id')?? $product->Prod_Id])}}" method="post">
            @csrf
            @include('Harvel.Product.productFields')

            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('product.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
