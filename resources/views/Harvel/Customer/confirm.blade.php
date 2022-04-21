@extends('Master.Master')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>

        <form action="{{route('customer.destroy', ['Cus_Id' =>$customer->Cus_Id])}}" method="post">
            @csrf
            @include('Harvel.Customer.customerDetails')
            <input type="hidden" name="Cus_Id" value="{{$customer->Cus_Id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
