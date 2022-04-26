<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use App\Repository\ProductRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllProductController extends Controller
{
    public function index()
    {
        $product = ProductRepos::getAllProduct();
        $category = CategoryRepos::getAllCate();
        if($key = request()->key)
        {
            //The LIKE command is used in a WHERE clause to search for a specified pattern in a column.
            //You can use two wildcards with LIKE:
            //% - Represents zero, one, or multiple characters
            //_ - Represents a single character (MS Access uses a question mark (?) instead)
            $key = DB::table('product')->where('Prod_Name','like','%'.$key.'%')->get();
            $product= $key;
        }
        return view('Harvel.allproduct',
            [
                'product' => $product,
                'category' => $category,
            ]);
    }

    public function show($Prod_Id)
    {

        $product = ProductRepos::getProductById($Prod_Id);
        $category = CategoryRepos::getCateByProd_Id($Prod_Id);
        return view('Harvel.show',
            [
                'product' => $product[0],
                'category' => $category[0],
            ]
        );
    }

    public function category($Cate_Id)
    {
        $product = ProductRepos::selectCate($Cate_Id);
        $category = CategoryRepos::getAllCate();
        return view('Harvel.allproduct',
            [
                'product' => $product,
                'category'=>$category,
            ]);
    }

    public function download(){
        $download = public_path('Product Details.doc');
        return response()->download($download);
        return view('Harvel.allproduct');
    }
}
