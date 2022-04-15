@extends('Master.Master')

<nav>
    <div class="nav-link" id="navlink">
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href={{route('Harvel.about')}}>ABOUT</a></li>
            <li><a href="">ALL PRODUCT</a></li>
            <input type="text" id="search_bar" placeholder="Search...">
            <li><a href="">CONTACT</a></li>
            <li><a href="{{route('admin.index')}}">LOGIN</a></li>
        </ul>
    </div>
</nav>
