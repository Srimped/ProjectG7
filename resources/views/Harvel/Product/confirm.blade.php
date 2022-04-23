@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>

        <form action="{{route('product.destroy', ['Prod_Id' =>$product->Prod_Id])}}" method="post">
            @csrf
            @include('Harvel.Product.productDetails')
            <input type="hidden" name="Prod_Id" value="{{$product->Prod_Id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('product.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
