@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <form action="" class="form-inline" >
            <div class="form-group">
                <input class="form-control" name="key" placeholder="Search by name">
            </div>
            <button type="submit" class="btn btn-primary" value="search">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <h1 class="display-4">Admin Index</h1>
        @include('Harvel.Admin.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admin as $a)
                <tr>
                    <td>{{$a->username}}</td>
                    <td>{{$a->password}}</td>
                    <td>{{$a->Ad_Name}}</td>
                    <td>{{$a->Ad_Email}}</td>
                    <td>{{$a->Ad_Phonenumber}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('admin.show', ['Ad_Id' => $a->Ad_Id])}}"
                        >Details</a>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.edit', ['Ad_Id' => $a->Ad_Id])}}"
                        >Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('admin.confirm', ['Ad_Id' => $a->Ad_Id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

