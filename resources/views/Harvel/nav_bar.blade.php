@extends('Master.Master')
<nav>
    <a href="http://127.0.0.1:8000/"><img src="/image/logo.png" style="width: 60%"></a>
    <div class="nav-link" id="navlink">
        <ul>
            <li><a href={{route('harvel.home')}}>HOME</a></li>
            <li><a href={{route('harvel.about')}}>ABOUT</a></li>
            <li><a href="{{route('allproduct.index')}}">PRODUCT</a></li>
            <form action="" style="display: inline-block">
                <input class="search_bar" name="key" id="key" placeholder="Search by name" style="width: 200px; padding-right: 20px; padding-left: 20px">
            </form>
            <li><a href="{{route('auth.signin')}}">LOGIN</a></li>
        </ul>
    </div>
</nav>
