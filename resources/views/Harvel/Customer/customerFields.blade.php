<input type="hidden" name="Cus_Id" value="{{old('Cus_Id')?? $customer->Cus_Id}}">
<div class="form-group">
    <label for="Cus_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Cus_Name" name="Cus_Name" value="{{old('Cus_Name')?? $customer->Cus_Name}}">
</div>

<div class="form-group">
    <label for="Cus_Email" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" id="Cus_Email" name="Cus_Email" min="0" value="{{old('Cus_Email')?? $customer->Cus_Email}}">
</div>

<div class="form-group">
    <label for="Cus_Phonenumber" class="font-weight-bold">Phone number</label>
    <input type="text" class="form-control" id="Cus_Phonenumber" name="Cus_Phonenumber" min="0" value="{{old('Cus_Phonenumber')?? $customer->Cus_Phonenumber}}">
</div>

<div class="form-group">
    <label for="location" class="font-weight-bold">Location</label>
    <input type="text" class="form-control" id="location" name="location" value="{{old('location')?? $customer->location}}">
</div>
