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

Route::group(['prefix' => 'about'], function () {
    Route::get('',function (){
        return view('Harvel.about');
    })->name('Harvel.about');
    });

Route::group(['prefix' => 'allproduct'], function () {
    Route::get('', [
        'uses' => 'AllProductController@index',
        'as' => 'allproduct.index'
    ]);

    Route::get('show/{Prod_Id}',[
        'uses' => 'AllProductController@show',
        'as' => 'allproduct.show'
    ]);
    Route::get('category/{Cate_Id}',[
        'uses' => "AllProductController@navindex",
        'as' => 'allproduct.category'
    ]);
});

Route::group(['prefix' => 'adminrepos','middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{Ad_Id}',[
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'admin.show'
    ]);

    Route::get('update/{Ad_Id}',[
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{Ad_Id}',[
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'admin.update'
    ]);
});

Route::group(['prefix' => 'customerrepos','middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'CustomerControllerWithRepos@index',
        'as' => 'customer.index'
    ]);

    Route::get('show/{Cus_Id}',[
        'uses' => 'CustomerControllerWithRepos@show',
        'as' => 'customer.show'
    ]);

    Route::get('update/{Cus_Id}',[
        'uses' => 'CustomerControllerWithRepos@edit',
        'as' => 'customer.edit'
    ]);

    Route::post('update/{Cus_Id}',[
        'uses' => 'CustomerControllerWithRepos@update',
        'as' => 'customer.update'
    ]);

    Route::get('delete/{Cus_Id}', [
        'uses' => 'CustomerControllerWithRepos@confirm',
        'as' => 'customer.confirm'
    ]);

    Route::post('delete/{Cus_Id}',[
        'uses' => 'CustomerControllerWithRepos@destroy',
        'as' => 'customer.destroy'
    ]);
});

Route::group(['prefix' => 'productrepos','middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'ProductControllerWithRepos@index',
        'as' => 'product.index'
    ]);

    Route::get('show/{Prod_Id}',[
        'uses' => 'ProductControllerWithRepos@show',
        'as' => 'product.show'
    ]);

    Route::get('create',[
        'uses' => 'ProductControllerWithRepos@create',
        'as' => 'product.create'
    ]);

    Route::post('create',[
        'uses' => 'ProductControllerWithRepos@store',
        'as' => 'product.store'
    ]);

    Route::get('update/{Prod_Id}',[
        'uses' => 'ProductControllerWithRepos@edit',
        'as' => 'product.edit'
    ]);

    Route::post('update/{Prod_Id}',[
        'uses' => 'ProductControllerWithRepos@update',
        'as' => 'product.update'
    ]);

    Route::get('delete/{Prod_Id}', [
        'uses' => 'ProductControllerWithRepos@confirm',
        'as' => 'product.confirm'
    ]);

    Route::post('delete/{Prod_Id}',[
        'uses' => 'ProductControllerWithRepos@destroy',
        'as' => 'product.destroy'
    ]);
});

Route::group(['prefix' => 'categoryrepos','middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'CategoryControllerWithRepos@index',
        'as' => 'category.index'
    ]);

    Route::get('show/{Cate_Id}',[
        'uses' => 'CategoryControllerWithRepos@show',
        'as' => 'category.show'
    ]);

    Route::get('create',[
        'uses' => 'CategoryControllerWithRepos@create',
        'as' => 'category.create'
    ]);

    Route::post('create',[
        'uses' => 'CategoryControllerWithRepos@store',
        'as' => 'category.store'
    ]);

    Route::get('update/{Cate_Id}',[
        'uses' => 'CategoryControllerWithRepos@edit',
        'as' => 'category.edit'
    ]);

    Route::post('update/{Cate_Id}',[
        'uses' => 'CategoryControllerWithRepos@update',
        'as' => 'category.update'
    ]);

    Route::get('delete/{Cate_Id}', [
        'uses' => 'CategoryControllerWithRepos@confirm',
        'as' => 'category.confirm'
    ]);

    Route::post('delete/{Cate_Id}',[
        'uses' => 'CategoryControllerWithRepos@destroy',
        'as' => 'category.destroy'
    ]);
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login',[
        'uses' => 'ManualAuthController@ask',
        'as'=> 'auth.ask'
    ]);
    Route::post('login',[
        'uses' => 'ManualAuthController@signin',
        'as'=> 'auth.signin'
    ]);
    Route::get('logout',[
        'uses' => 'ManualAuthController@signout',
        'as'=> 'auth.signout'
    ]);
});
