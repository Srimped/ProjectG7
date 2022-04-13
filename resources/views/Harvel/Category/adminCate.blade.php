@extends('Master.Master')
@section('main')
    @include('Harvel.admin_nav_bar')
    <h1 class="admin_title">Category Manager</h1><br>
    <div class="action-bar">
        <input type="text" id="search_bar"  class="search_bar" placeholder="Search Category...."><i class="fa-solid fa-magnifying-glass"></i><br><br>
        <a type="button" class="btn btn-warning" href="{{asset('admin/category/create')}}">Create</a>
        <br>
        <br>
        <br>
    </div><br>
    <div class="container">
        <table class="table table-hover" style="border: 2px solid">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Smart Phone</td>
                <td><a type="button" class="btn btn-info" >Edit</a></td>
                <td><a type="button" class="btn btn-danger">Delete</a></td>
            </tr>
            </tbody>
        </table>
@endsection
