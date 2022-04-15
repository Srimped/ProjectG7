@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <style>
        section{
            text-align: center;
        }
    </style>
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-black">
                <h2>About Us !</h2>
                <h3 style="text-align: center;">Welcome To
                    <span id="W_Name1">Harvel Electric</span>
                </h3>
                <p>
                    <span id="W_Name2">Harvel Electric</span> is a Professional
                    <span id="W_Type1">Electric Devices</span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of
                    <span id="W_Type2">Electric Devices</span>, with a focus on dependability and
                    <span id="W_Spec">Selling Electric Product</span>. We're working to turn our passion for
                    <span id="W_Type3">Electric Devices</span>
                    into a booming online website. We hope you enjoy our
                    <span id="W_Type4">Electric Devices</span> as much as we enjoy offering them to you.
                </p>
                <p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Services</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Delivery Services</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Promotion</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
            </div>
        </div>
    </div>
</section>
@endsection