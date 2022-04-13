@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <input type="text" id="search_bar" class="search_bar" placeholder="Search Product...."><i
            class="fa-solid fa-magnifying-glass"></i><br>
        <a type="button" class="btn btn-danger btn-sm"
           href="{{route('product.create')}}">Create</a>
        <h1 class="display-4">Product Index</h1>
        @include('Harvel.Product.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price (VND)</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                <tr>
                    <td>{{$p->Prod_Name}}</td>
                    <td>{{$p->price}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('product.show', ['Prod_Id' => $p->Prod_Id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('product.edit', ['Prod_Id' => $p->Prod_Id])}}"
                        >Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('product.confirm', ['Prod_Id' => $p->Prod_Id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

