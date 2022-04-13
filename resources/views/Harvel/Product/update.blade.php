@extends('Master.Master')

@section('main')
    <div class="create-form">
        <h3 style="text-align: center;">Modify Classroom</h3>
        @include('partials.Errors')
        @include('Harvel.Product.formField')
    </div>
@endsection
