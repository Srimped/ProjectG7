@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/carousel_1.jpg" alt="Los Angeles" width="945" height="852">
                </div>
                <div class="carousel-item">
                    <img src="/image/carousel_2.jpg" alt="Chicago" width="945" height="852">
                </div>
                <div class="carousel-item">
                    <img src="/image/carousel_3.jpg" alt="New York" width="945" height="852">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
    </div>
    </div>
    <section class="bestseller">
        <br>
        <br>
        <h1 class="best_title">---- Best Seller ----</h1>
        <p class="best_des">- Best Items In This Month -</p>
        <div class="row">
            <div class="item_box">
                <img src="/image/product_1.jpg">
                <div class="layer">
                    <h3>Iphone 13</h3>
                    <p>the newest smart phone in apple</p>
                    <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    <button class="action-btn" type="submit" name="Detail"><i class="fas fa-shopping-cart"></i>Show Detail</button>

                </div>
            </div>
            <div class="item_box">
                <img src="/image/product_1.jpg">
                <div class="layer">
                    <h3>Iphone 13</h3>
                    <p>the newest smart phone in apple</p>
                    <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    <button class="action-btn" type="submit" name="Detail"><i class="fas fa-shopping-cart"></i>Show Detail</button>

                </div>
            </div>
            <div class="item_box">
                <img src="/image/product_1.jpg">
                <div class="layer">
                    <h3>Iphone 13</h3>
                    <p>the newest smart phone in apple</p>
                    <button class="action-btn" type="submit" name="Add"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    <button class="action-btn" type="submit" name="Detail"><i class="fas fa-shopping-cart"></i>Show Detail</button>

                </div>
            </div>
            @include('Harvel.footer')
        </div>
    </section>
@endsection()
