@extends('Master.Master')

@section('main')
    <div class="create-form">
        <h3 style="text-align: center;">Create New Category</h3>
        {{--        @include('partials.Errors')--}}
        <form action="" method="post">
            @csrf
            @include('Harvel.Category.CateformField')
        </form>
    </div>
@endsection
