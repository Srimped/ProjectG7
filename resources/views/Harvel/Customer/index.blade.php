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
        <h1 class="display-4">Customer Index</h1>
        @include('Harvel.Customer.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Location</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $cus)
                <tr>
                    <td>{{$cus->Cus_Name}}</td>
                    <td>{{$cus->Cus_Email}}</td>
                    <td>{{$cus->Cus_Phonenumber}}</td>
                    <td>{{$cus->location}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('customer.show', ['Cus_Id' => $cus->Cus_Id])}}"
                        >Details</a>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('customer.edit', ['Cus_Id' => $cus->Cus_Id])}}"
                        >Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('customer.confirm', ['Cus_Id' => $cus->Cus_Id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection
