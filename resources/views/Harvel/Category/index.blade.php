@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')<br>
    <div class="container">
        <form action="" class="form-inline" >
            <div class="form-group">
                <input class="search_bar" name="key" placeholder="Search by name" style="transform: translateX(380%) translateY(100%);">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" value="search" style="transform: translateX(1380%) translateY(128%)">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <br>
        <a type="button" class="btn btn-danger btn-sm"
           href="{{route('category.create')}}">Create</a>
        <br><br>
        <h1 class="display-4">Category Index</h1>
        @include('Harvel.Category.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Category Name</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $c)
                <tr>
                    <td>{{$c->Cate_Name}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('category.show', ['Cate_Id' => $c->Cate_Id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('category.edit', ['Cate_Id' => $c->Cate_Id])}}"
                        >Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('category.confirm', ['Cate_Id' => $c->Cate_Id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

