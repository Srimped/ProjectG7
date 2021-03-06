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
    <form class="login-form" action="{{route('auth.signin')}}" method="post">
        @include('Harvel.partials.errors')
        @include('Harvel.manualAuth.sessionmessage')
        <br><br><br><br><br>
        <h2>Login Form</h2>
        @csrf
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">

            <button type="submit" class="btn btn-success">Login</button>
            <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
        </div>

        <div class="container">
            <a type="button" class="btn btn-danger" href="{{route('harvel.home')}}" >Cancel</a>
            <span class="password"><a href="#">Forgot password?</a></span>
            <a style="margin: 20px" type="button" class="btn btn-warning" href="{{route('auth.register')}}">Register</a>
        </div>
    </form>
        </div>
    </section>
@endsection
