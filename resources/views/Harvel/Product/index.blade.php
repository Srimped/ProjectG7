@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')<br>
    <style>
        .img li{
            position: absolute;
            list-style: none;
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            transition: 0.5s;
            cursor: pointer;
            border: solid black 2px;
        }

        .img li:hover {
            background: #86ff3b;
            box-shadow: 0 0 0 4px #333, 0 0 0 6px #86ff3b
        }

        .img li img{
            width: 1500%;
            visibility: hidden;
            background: rgba(44, 181, 137, 0.3);
            margin-left: 100px;
            transform: translateX(-170%) translateY(-70%);
        }

        .img li:hover img{
            visibility: visible;
            opacity: 1;
        }
    </style>
    <div class="container">

        <form action="" class="form-inline" >
            <div class="form-group">
                <input class="search_bar" name="key" placeholder="Search by name" style="transform: translateX(380%) translateY(100%);">
            </div>
            <button type="submit" class="btn btn-primary" value="search" style="transform: translateX(1380%) translateY(128%)"><i class="fas fa-search"></i></button>
        </form>

        <br>
        <a type="button" class="btn btn-danger btn-sm"
           href="{{route('product.create')}}">Create</a>
        <br><br>
        <h1 class="display-4">Product Index</h1>
        @include('Harvel.Product.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col"> </th>
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
{{--                    <td><img src="/image/{{$p->Prod_Image}}"></td>--}}
                    <td>
                        <ul class="img">
                            <li>
                                <img  src="/image/{{$p->Prod_Image}}">
                            </li>
                        </ul>
                    </td>
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

