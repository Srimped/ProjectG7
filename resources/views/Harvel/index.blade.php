@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <section style="width: 100%; margin: auto;>
        <div id=">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('image/carousel.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/carousel_1.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/carousel_2.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/carousel_3.png')}}" alt="fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/carousel_4.png')}}" alt="fifth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    @include('Harvel.category')
    <br><br><br><br><br><br>
    <h1 style="background: #4CAF50; border-radius: 40px">---Best Seller---</h1>
    <p style="background: #86ff3b; text-align: center; border-radius: 40px">--The Most Product Selled--</p>
    <section class="shop">
    @foreach($product as $p)
        @if($p->price >= 30000000)
        <a style="cursor: pointer" type="submit" href="{{route('allproduct.show', ['Prod_Id' => $p->Prod_Id])}}">
            <div class="shop-row">
                <div class="shop-col">
                    <img src="/image/{{$p->Prod_Image}}" width="10%" alt="">
                    <div class="layer">
                        <h4>{{$p->Prod_Name}}</h4>
                        <h5>{{$p->price}} VN??</h5>
                    </div>
                </div>
            </div>
        </a>
            @endif
    @endforeach
    <br><br><br><br>
        <h1 style="background: #4CAF50; border-radius: 40px">---Highest Price---</h1>
        <p style="background: #86ff3b; text-align: center; border-radius: 40px">--The Most Expensive Product--</p>
        <section class="shop">
            @foreach($product as $p)
                @if($p->price > 50000000)
                    <a style="cursor: pointer" type="submit" href="{{route('allproduct.show', ['Prod_Id' => $p->Prod_Id])}}">
                        <div class="shop-row">
                            <div class="shop-col">
                                <img src="/image/{{$p->Prod_Image}}" width="10%" alt="">
                                <div class="layer">
                                    <h4>{{$p->Prod_Name}}</h4>
                                    <h5>{{$p->price}} VN??</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
                <br><br><br><br>
                <h1 style="background: #4CAF50; border-radius: 40px">---Lowest Price---</h1>
                <p style="background: #86ff3b; text-align: center; border-radius: 40px">--The Cheapest Product</p>
                <section class="shop">
                    @foreach($product as $p)
                        @if($p->price <= 5000000)
                            <a style="cursor: pointer" type="submit" href="{{route('allproduct.show', ['Prod_Id' => $p->Prod_Id])}}">
                                <div class="shop-row">
                                    <div class="shop-col">
                                        <img src="/image/{{$p->Prod_Image}}" width="10%" alt="">
                                        <div class="layer">
                                            <h4>{{$p->Prod_Name}}</h4>
                                            <h5>{{$p->price}} VN??</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
            <section>
                @include('Harvel.footer')
            </section>
@endsection()
