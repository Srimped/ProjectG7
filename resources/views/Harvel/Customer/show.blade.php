@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <h1 class="display-4">Customer Details</h1>
        @include('Harvel.Customer.customerDetails')
        <a type="button" href="{{route('customer.index')}}" class="btn btn-info"><< Index</a>
    </div>
@endsection
