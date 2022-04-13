@extends('Master.Master')
@section('main')
    @include('Harvel.admin_nav_bar')
    <h1 class="admin_title">Customer Manager</h1><br>
    <div class="action-bar">
        <input type="text" id="search_bar"  class="search_bar" placeholder="Search Customer...."><i class="fa-solid fa-magnifying-glass"></i><br><br>
        <a type="button" class="btn btn-warning" href="{{asset('')}}">Create</a>
        <br>
        <br>
        <br>
    </div><br>
    <div class="container">
        <table class="table table-hover" style="border: 2px solid">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Vu Hien Vinh</td>
                <td>vinhvhgch200196</td>
                <td>123123123</td>
                <td>vinhvhgch200196@gmail.com</td>
                <td>0869662310</td>
                <td>dich vong hau</td>
                <td><a type="button" class="btn btn-info" >Edit</a></td>
                <td><a type="button" class="btn btn-danger">Delete</a></td>
            </tr>
            </tbody>
        </table>
@endsection
