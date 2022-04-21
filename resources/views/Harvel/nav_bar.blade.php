@extends('Master.Master')
<nav>
    <a href="http://127.0.0.1:8000/"><img src="/image/logo.png" style="width: 80%"></a>
    <div class="nav-link" id="navlink">
        <ul>
            <li><a href="http://127.0.0.1:8000/">HOME</a></li>
            <li><a href={{route('Harvel.about')}}>ABOUT</a></li>
            <li><a href="{{route('allproduct.index')}}">ALL PRODUCT</a></li>
            <input class="search_bar" name="key" placeholder="Search by name" style="width: 200px; padding-right: 20px; padding-left: 20px">
            <li><a href="{{route('auth.signin')}}">LOGIN</a></li>
        </ul>
    </div>
</nav>
<br>
