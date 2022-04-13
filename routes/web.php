<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Harvel.index');
});

route::get('admin/product',function (){
    return view('Harvel.Product.admin');
});

Route::get('admin/product/create', function (){
    return view('Harvel.Product.new');
});

route::get('admin/category',function (){
    return view('Harvel.Category.adminCate');
});

route::get('admin/category/create',function (){
    return view('Harvel.Category.newCate');
});

route::get('admin/customer',function (){
    return view('Harvel.Customer.adminCus');
});
