@extends('Master.Master')
<nav>
    <a href="http://127.0.0.1:8000/"><img src="/image/logo.png" style="width: 80%"></a>
    <div class="nav-link" id="navlink">
        <ul>
            <li><a href="http://127.0.0.1:8000/">HOME</a></li>
            <li><a href={{route('Harvel.about')}}>ABOUT</a></li>
            <li><a href="{{route('allproduct.index')}}">ALL PRODUCT</a></li>
            <input class="search_bar" name="key" placeholder="Search by name">
            <li><a href="">CONTACT</a></li>
            <li><a href="{{route('admin.index')}}">LOGIN</a></li>
        </ul>
    </div>
</nav>
<br>
<h1 style="text-align: center">Categories</h1>
<nav>
    <div class="nav-link" id="navlink" style="font-size: 20px; text-align: center">
        <ul>
{{--            @foreach($categories as $c)--}}
{{--                <li><a>{{$c->Cate_Name}}</a></li>--}}
{{--            @endforeach--}}
            <li><a>Smart Phone</a></li>
            <li><a>Laptop</a></li>
            <li><a>Pc</a></li>
            <li><a>Smart Watch</a></li>
            <li><a>Tablet</a></li>
        </ul>
    </div>
</nav>
