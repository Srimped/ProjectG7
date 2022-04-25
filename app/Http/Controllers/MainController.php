<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use App\Repository\ProductRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        $product = ProductRepos::getAllProduct();
        $category = CategoryRepos::getAllCate();
        return view('Harvel.index',
            [
                'category' => $category,
                'product' => $product,
            ]);
    }

    public function about(){
        return view('Harvel.about');
    }

    public function contact(){
        return view('Harvel.contact');
    }
}
