@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
    <h1>---All Products From Category---</h1>
    <section class="shop">
        @foreach($product as $p)
            <div class="shop-row">
                <div class="shop-col">
                    <img src="/image/{{$p->Prod_Image}}" width="10%" alt="">
                    <div class="layer">
                        <h5>{{$p->Prod_Name}}</h5>
                        <p>{{$p->price}} VNĐ</p>
                        <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        <a class="action-btn" type="submit" href="{{route('allproduct.show', ['Prod_Id' => $p->Prod_Id])}}">Show Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
