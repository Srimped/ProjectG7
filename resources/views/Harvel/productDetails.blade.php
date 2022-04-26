<div class="row">
    <div class="col-sm-4">
        <img class="dimage" src="/image/{{ $product->Prod_Image }}" style="width: 100%">
    </div>
    <br>
    <div class="col-sm-6">
        <h5 class="col-sm-3">Name</h5>
        <div class="col-sm-9">{{ $product->Prod_Name }}</div>
        <br>
        <h5 class="col-sm-3">Category</h5>
        <div class="col-sm-9">{{ $category->Cate_Name }}</div>
        <br>
        <h5 class="col-sm-3">Price(VND)</h5>
        <div class="col-sm-9">{{ $product->price }} VNĐ</div>
        <br>
        <h5 class="col-sm-3">Description</h5>
        <div class="col-sm-9">{{ $product->description }}</div>
        <br><br>
        <div class="col-sm-9">
            <a class="btn btn-warning" href="{{route('allproduct.download')}}">Download</a>
        </div>
    </div>
</div>
