@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <section style="width: 80%; margin: auto">
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
    <section class="shop">
        <br>
        <br>
        <h1 class="best_title">---- Best Seller ----</h1>
        <p class="best_des">- Best Items In This Month -</p>
        <div class="shop-row">
            <div class="shop-col">
                <img src="/image/product_1.jpg">
                <div class="layer">
                    <h3>Iphone 13</h3>
                    <p>the newest smart phone in apple</p>
                    <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-btn" type="submit" name="Detail">Show Detail</button>

                </div>
            </div>
        </div>
            <div class="shop-row">
                <div class="shop-col">
                    <img src="/image/product_1.jpg">
                    <div class="layer">
                        <h3>Iphone 13</h3>
                        <p>the newest smart phone in apple</p>
                        <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                        <button class="action-btn" type="submit" name="Detail">Show Detail</button>
                    </div>
                </div>
            </div>
            <div class="shop-row">
                <div class="shop-col">
                    <img src="/image/product_1.jpg">
                    <div class="layer">
                        <h3>Iphone 13</h3>
                        <p>the newest smart phone in apple</p>
                        <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                        <button class="action-btn" type="submit" name="Detail">Show Detail</button>
                    </div>
                </div>
            </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section>
        @include('Harvel.footer')
    </section>
@endsection()
