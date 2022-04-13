<input type="hidden" name="Ad_Id" value="{{old('Ad_Id')?? $admin->Ad_Id}}">
<div class="form-group">
    <label for="Ad_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Ad_Name" name="Ad_Name" value="{{old('Ad_Name')?? $admin->Ad_Name}}">
</div>

<div class="form-group">
    <label for="username" class="font-weight-bold">Username</label>
    <input type="text" class="form-control" id="username" name="username"
           value="{{old('username')?? $admin->username}}">
</div>

<div class="form-group">
    <label for="password" class="font-weight-bold">Password</label>
    <input type="text" class="form-control" id="password" name="password" min="0"
           value="{{old('password')?? $admin->password}}">
</div>

<div class="form-group">
    <label for="Ad_Email" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" id="Ad_Email" name="Ad_Email" min="0"
           value="{{old('Ad_Email')?? $admin->Ad_Email}}">
</div>

<div class="form-group">
    <label for="Ad_Phonenumber" class="font-weight-bold">Phone number</label>
    <input type="text" class="form-control" id="Ad_Phonenumber" name="Ad_Phonenumber" min="0"
           value="{{old('Ad_Phonenumber')?? $admin->Ad_Phonenumber}}">
</div>

