<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        $category = CategoryRepos::getAllCate();
        return view('Harvel.index',
            [
                'category' => $category,
            ]);
    }

    public function about(){
        return view('Harvel.about');
    }
}
