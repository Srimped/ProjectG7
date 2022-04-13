<input type="hidden" name="Cate_Id" value="{{old('Cate_Id')?? $category->Cate_Id}}">
<div class="form-group">
    <label for="Cate_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Cate_Name" name="Cate_Name"
           value="{{old('Cate_Name')?? $category->Cate_Name}}">

</div>


