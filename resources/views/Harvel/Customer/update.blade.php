@extends('Master.Master')

@section('main')
    @include('Harvel.admin_nav_bar')
    <div class="container">
        <h1 class="display-4">Update An Existing Customer</h1>
        @include('Harvel.partials.errors')

        <form action="{{route('customer.update', ['Cus_Id' => old('Cus_Id')?? $customer->Cus_Id])}}" method="post">
            @csrf
            @include('Harvel.Customer.customerFields')

            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
