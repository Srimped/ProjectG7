
<input type="hidden" name="Prod_Id" value="{{old('Prod_Id')?? $product->Prod_Id}}">
<div class="form-group">
    <label for="Prod_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Prod_Name" name="Prod_Name"
           value="{{old('Prod_Name')?? $product->Prod_Name}}">
</div>

@php
    $cID = old('category') ?? $product->Cate_Id?? null;
@endphp
<div class="form-group">
    <label for="category" class="font-weight-bold">Category</label>
    <select name="category" class="form-control" id="category">
        <option value="0">Please select a category!!!</option>
        @foreach($category as $c)
            <option value="{{$c->Cate_Id}}"
                {{($cID != null && $c -> Cate_Id == $cID) ? 'selected' : ''}}
            >{{$c->Cate_Name}}</option>
        @endforeach
    </select>
    <div class="create-group">
        <label for="Prod_Image" class="font-weight-bold">Image</label>
        <input type="file" class="form-control" id="Prod_Image" name="Prod_Image"
               value="{{old('Prod_Image')?? $product->Prod_Image}}">
    </div>
    <div class="form-group">
        <label for="price" class="font-weight-bold">Price(VND)</label>
        <input type="number" class="form-control" id="price" name="price" value="{{old('price')?? $product->price}}">
    </div>
    <div class="form-group">
        <label for="description" class="font-weight-bold">Description</label>
        <textarea type="text" class="form-control" rows="10" id="description" name="description"
                  value="{{old('description')?? $product->description}}"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-dark">Submit</button>
    <a class="btn btn-success" href="{{route('product.index')}}">Cancel</a>
</div>





