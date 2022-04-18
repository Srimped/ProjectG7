<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9">{{ $product->Prod_Id }}</dd>

    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $product->Prod_Name }}</dd>

    <dt class="col-sm-3">Image</dt>
    <dd class="col-sm-9"><img src="/image/{{ $product->Prod_Image }}" style="width: 50%"></dd>

    <dt class="col-sm-3">Category</dt>
    <dd class="col-sm-9">{{ $category->Cate_Name }}</dd>

    <dt class="col-sm-3">Price(VND)</dt>
    <dd class="col-sm-9">{{ $product->price }}</dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{ $product->description }}</dd>

</dl>
