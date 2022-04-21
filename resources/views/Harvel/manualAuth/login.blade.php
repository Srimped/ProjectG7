@extends('Master.Master')
@section('main')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1{
            margin-bottom: 40px;
        }

        form{
            transform: translateX(30%);
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
            color: white;
            font-size: 18px;
            padding: 10px;
        }
    </style>
    <br>
    <section class="loginheader">
    <div class="text-box">
        <form action="{{route('auth.signin')}}" method="post">
            @csrf
            <h1>Login Form</h1>
            <label for="username"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="username">
            <br><br>
            <label for="password"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="password">
            <br><br>
            <button class="btn btn-success" type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br>
            <div>
                <a type="button" class="btn btn-danger" href="http://127.0.0.1:8000" >Cancel</a>
                <span class="password"><a href="#">Forgot password?</a></span>
            </div>
        </form>
    </div>
</section>
@endsection
