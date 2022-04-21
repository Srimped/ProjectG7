@extends('Master.Master')
<nav>
    <div class="nav-link" id="navlink">
        <ul>
            <li><a href="http://127.0.0.1:8000/">HOME</a></li>
            <li><a href={{route('Harvel.about')}}>ABOUT</a></li>
            <li><a href="{{route('allproduct.index')}}">ALL PRODUCT</a></li>
            <input class="search_bar" name="key" placeholder="Search by name">
            <li><a href="">CONTACT</a></li>
            <li><a href="{{route('auth.signin')}}">LOGIN</a></li>
        </ul>
    </div>
</nav>
<br>
<h1 style="text-align: center">Categories</h1>
<nav>
    <div class="nav-link" id="navlink" style="font-size: 20px; text-align: center">
        <ul>
            <li><a>Smart Phone</a></li>
            <li><a>Laptop</a></li>
            <li><a>Pc</a></li>
            <li><a>Smart Watch</a></li>
            <li><a>Tablet</a></li>
        </ul>
    </div>
</nav>
