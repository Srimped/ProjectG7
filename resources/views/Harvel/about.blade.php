@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <style>
        section{
            text-align: center;
        }
    </style>
    <br><br><br><br><br>
<section class="bg-success py-5">
    <div class="container">
        <div>
            <div>
                <h1>About Us !</h1>
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
    <br>
<section class="container py-5">
    <div class="">
        <div class="col-lg-6 m-auto">
            <h1>Our Services</h1>
            <p>
                These are all of the services that we have!! Enjoy
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-warning text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2>Delivery Services</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-warning text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2>Shipping & Return</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-warning text-center"><i class="fa fa-percent"></i></div>
                <h2>Promotion</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-warning text-center"><i class="fa fa-user"></i></div>
                <h2>24 Hours Service</h2>
            </div>
        </div>
    </div>
</section>
    <section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @include('Harvel.footer')
    </section>
@endsection
