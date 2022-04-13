@extends('Master.Master')
 @section('main')
@include('Harvel.admin_nav_bar')
     <h1 class="admin_title">Product Manager</h1><br>
<div class="action-bar">
     <input type="text" id="search_bar"  class="search_bar" placeholder="Search Product...."><i class="fa-solid fa-magnifying-glass"></i><br><br>
    <a type="button" class="btn btn-warning" href="{{asset('admin/product/create')}}">Create</a>
        <br>
    <br>
    <br>
</div><br>
     <div class="container">
         <table class="table table-hover" style="border: 2px solid">
             <thead class="thead-dark">
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">img</th>
                 <th scope="col">Product name</th>
                 <th scope="col">Price</th>
                 <th scope="col">Category</th>
                 <th scope="col">&nbsp;</th>
                 <th scope="col">&nbsp;</th>
                 <th scope="col">&nbsp;</th>
             </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>1</td>
                     <td><img src="/image/product_1.jpg"></td>
                     <td>Iphone 13</td>
                     <td>210$</td>
                     <td>Smart Phone</td>
                     <td><a type="button" class="btn btn-primary" >Detail</a></td>
                     <td><a type="button" class="btn btn-info" >Edit</a></td>
                     <td><a type="button" class="btn btn-danger">Delete</a></td>
                 </tr>
                 <tr>
                     <td>1</td>
                     <td><img src="/image/product_1.jpg" style="width: 20%"></td>
                     <td>Iphone 13</td>
                     <td>210$</td>
                     <td>Smart Phone</td>
                     <td><a type="button" class="btn btn-primary" >Detail</a></td>
                     <td><a type="button" class="btn btn-info" >Edit</a></td>
                     <td><a type="button" class="btn btn-danger">Delete</a></td>
                 </tr>
                 <tr>
                     <td>1</td>
                     <td><img src="/image/product_1.jpg" style="width: 20%"></td>
                     <td>Iphone 13</td>
                     <td>210$</td>
                     <td>Smart Phone</td>
                     <td><a type="button" class="btn btn-primary" >Detail</a></td>
                     <td><a type="button" class="btn btn-info" >Edit</a></td>
                     <td><a type="button" class="btn btn-danger">Delete</a></td>
                 </tr>
                 <tr>
                     <td>1</td>
                     <td><img src="/image/product_1.jpg" style="width: 20%"></td>
                     <td>Iphone 13</td>
                     <td>210$</td>
                     <td>Smart Phone</td>
                     <td><a type="button" class="btn btn-primary" >Detail</a></td>
                     <td><a type="button" class="btn btn-info" >Edit</a></td>
                     <td><a type="button" class="btn btn-danger">Delete</a></td>
                 </tr>
             </tbody>
         </table>
 @endsection
