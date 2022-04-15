<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductControllerWithRepos extends Controller
{
    public function index()
    {
        $product = ProductRepos::getAllProduct();
        if($key = request()->key)
        {
            $key = DB::table('product')->where('Prod_Name','like','%'.$key.'%')->get();
            $product= $key;
        }
        return view('Harvel.Product.index',
            [
                'product' => $product,
            ]);
    }

    public function show($Prod_Id)
    {

        $product = ProductRepos::getProductById($Prod_Id);
        $category = CategoryRepos::getCateByProd_Id($Prod_Id);
        return view('Harvel.Product.show',
            [
                'product' => $product[0],
                'category' => $category[0],
            ]
        );
    }

    public function create()
    {
        $category = CategoryRepos::getAllCate();
        return view(
            'Harvel.Product.new',
            ["product" => (object)[
                'Prod_Id' => '',
                'Cate_Id' => '',
                'Prod_Name' => '',
                'price' => '',
                'description'=>'',
            ],
             "category" => $category
            ]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();

        $product = (object)[
            'Prod_Name' => $request->input('Prod_Name'),
            'Cate_Id'=>$request->input('category'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ];

        $newId = ProductRepos::insert($product);

        return redirect()
            ->action('ProductControllerWithRepos@index')
            ->with('msg', 'New product with id: '.$newId.' has been inserted');
    }

    public function edit($Prod_Id)
    {
        $product = ProductRepos::getProductById($Prod_Id);

        $category = CategoryRepos::getAllCate();



        return view(
            'Harvel.Product.update',
            ["product" => $product[0], "category" => $category]);
    }

    public function update(Request $request, $Prod_Id)
    {
        if ($Prod_Id != $request->input('Prod_Id')) {
            return redirect()->action('ProductControllerWithRepos@index');
        }

        $this->formValidate($request)->validate();

        $product = (object)[
            'Prod_Id' => $request->Prod_Id,
            'Prod_Name' => $request->input('Prod_Name'),
            'Cate_Id' => $request->input('category'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ];
        ProductRepos::update($product);

        return redirect()->action('ProductControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($Prod_Id){
        $product = ProductRepos::getProductById($Prod_Id); //this is always an array

        return view('Harvel.Product.confirm',
            [
                'product' => $product[0]
            ]
        );
    }

    public function destroy(Request $request, $Prod_Id)
    {
        if ($request->input('Prod_Id') != $Prod_Id) {
            //id in query string must match id in hidden input
            return redirect()->action('ProductSessionController@index');
        }

       ProductRepos::delete($Prod_Id);


        return redirect()->action('ProductControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'Prod_Name' => ['required'],
                'category' => ['gt:0'],
                'price' => ['required','numeric','gte:1000'],
                'description' => ['required']
            ],
            [
                'Prod_Name.required' => 'Please enter name!!!',
                'category.gt' => 'Please select the category!!!',
                'price.required' => 'Please enter the price!!!',
                'description.required' => 'Please introduction about the product!!!'
            ]
        );
    }


}
