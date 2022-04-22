<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoryControllerWithRepos extends Controller
{
    public function index()
    {
        $category = CategoryRepos::getAllCate();
        if($key = request()->key)
            {

                //The LIKE command is used in a WHERE clause to search for a specified pattern in a column.
                //You can use two wildcards with LIKE:
                //% - Represents zero, one, or multiple characters
                //_ - Represents a single character (MS Access uses a question mark (?) instead)
                $key = DB::table('category')->where('Cate_Name','like','%'.$key.'%')->get();
                $category= $key;
            }
        return view('Harvel.Category.index',
            [
                'category' => $category,
            ]);
    }

    public function navindex()
    {
        $categories = CategoryRepos::getAllCate();
        return view('Harvel.nav_bar',
            [
                'categories' => $categories,
            ]);
    }

    public function show($Cate_Id)
    {
        $category = CategoryRepos::getCateById($Cate_Id);
        return view('Harvel.Category.show',
            [
                'category' => $category[0]
            ]
        );
    }

    public function create()
    {

        return view(
            'Harvel.Category.new',
            ["category" => (object)[
                'Cate_Id' => '',
                'Cate_Name' => '',
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();

        $category = (object)[
            'Cate_Id'=>$request->input('Cate_Id'),
            'Cate_Name' => $request->input('Cate_Name'),
        ];

        $newId = CategoryRepos::insert($category);

        return redirect()
            ->action('CategoryControllerWithRepos@index')
            ->with('msg', 'New category with id: '.$newId.' has been inserted');
    }

    public function edit($Cate_Id)
    {
        $category = CategoryRepos::getCateById($Cate_Id);
        return view(
            'Harvel.Category.update',
            ["category" => $category[0]]);
    }

    public function update(Request $request, $Cate_Id)
    {
        if ($Cate_Id != $request->input('Cate_Id')) {
            return redirect()->action('CategoryControllerWithRepos@index');
        }

        $this->formValidate($request)->validate();

        $category = (object)[
            'Cate_Id' => $request->Cate_Id,
            'Cate_Name' => $request->input('Cate_Name'),
        ];
        CategoryRepos::update($category);

        return redirect()->action('CategoryControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($Cate_Id){
        $category = CategoryRepos::getCateById($Cate_Id);
        return view('Harvel.Category.confirm',
            [
                'category' => $category[0]
            ]);
    }

    public function destroy(Request $request, $Cate_Id)
    {

        if ($request->input('Cate_Id') != $Cate_Id) {
            return redirect()->action('CategoryControllerWithRepos@index');
        }
        if((DB::table('product')->where('Cate_Id','like','%'.$Cate_Id.'%')->first()===null)==false)
        {
            return redirect()->action('CategoryControllerWithRepos@index')
            ->with('msg', 'You cannot delete this category while there are products in this category!!!!');
        }

       CategoryRepos::delete($Cate_Id);


        return redirect()->action('CategoryControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'Cate_Name' => ['required'],
            ],
            [
                'Cate_Name' => 'Please enter name'
            ]
        );
    }


}
