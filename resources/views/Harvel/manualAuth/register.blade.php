@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <style>
        .loginheader{
            transform: translateX(5%);
        }
        h1{
            margin-bottom: 40px;
        }

        .login-form{
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: transparent;
            border-radius: 15px;
            margin-left: 600px;
        }

        input{
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }

        label{
            color: black;
            font-size: 18px;
            padding: 10px;
        }

        .container{
            background: rgba(13, 205, 207, 0.15);
        }

        .validation{
            transform: translateX(-50%);
        }
    </style>
    <br><br>
    <section class="loginheader">
        <div class="text-box">
            <form class="login-form" action="{{route('auth.registered')}}" method="post">
                @include('Harvel.partials.errors')
                <br><br><br><br><br>
                <h2>Registration Form</h2>
                @csrf
                <div class="container">
                    <label for="Cus_Name"><b>Name</b></label>
                    <input type="text" placeholder="Enter name" name="Cus_Name" value="{{old('Cus_Name')?? $customer->Cus_Name}}">

                    <label for="Cus_Email"><b>Email</b></label>
                    <input type="Email" placeholder="Enter Email" name="Cus_Email" value="{{old('Cus_Email')?? $customer->Cus_Email}}">

                    <label for="Cus_Phonenumber"><b>Phone Number</b></label>
                    <input type="number" placeholder="Enter Phone" name="Cus_Phonenumber" value="{{old('Cus_Phonenumber')?? $customer->Cus_Phonenumber}}">

                    <label for="location"><b>Location</b></label>
                    <input type="location" placeholder="Enter Location" name="location" value="{{old('location')?? $customer->location}}">

                    <button type="submit" class="btn btn-success">Register</button>
                </div>

                <div class="container">
                    <a type="button" class="btn btn-danger" href="{{route('auth.ask')}}" >Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
