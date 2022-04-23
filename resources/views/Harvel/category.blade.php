<section class="bestseller">
    <h1 class="best_title">---- Categories ----</h1>
    <div class="nav-cate" id="nav-cate">
        <ul class="shop">
            <li><a href="{{route('allproduct.index')}}">ALL</a></li>
            @foreach($category as $c)
                <li><a href="{{route('allproduct.category', ['Cate_Id' => $c->Cate_Id])}}">{{$c->Cate_Name}}</a></li>
            @endforeach
        </ul>
    </div>
</section>
