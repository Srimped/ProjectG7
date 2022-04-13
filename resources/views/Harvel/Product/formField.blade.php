<input type="hidden" name="id" value="">
<div class="create-group">
    <label for="ProdName" class="font-weight-bold">Product Name</label>
    <input type="text" class="form-control" id="ProdName" name="ProdName" value="">
</div>
<div class="create-group">
    <label for="Prodimg" class="font-weight-bold">Image</label>
    <input type="file" class="form-control" id="Prodimg" name="Prodimg" value="">
</div>
<div class="create-group">
    <label for="Prices" class="font-weight-bold">Prices</label>
    <input type="number" class="form-control" id="Prices" name="Prices" value="">
</div>
<div class="create-group">
    <label for="Category" class="font-weight-bold">Category</label>
    <select name="Category" class="form-control" id="Category">
        <option value="0">Select Category</option>
        <option value="1">Phone</option>
        <option value="2">Laptop</option>
    </select>
</div>
<div class="form-group">
    <label for="Description" class="font-weight-bold">Description</label>
    <textarea type="text" class="form-control" rows="10" id="comment" name="Description" value=""></textarea>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-success" href="{{asset('admin/product')}}">Cancel</a>
</div>
</div>
