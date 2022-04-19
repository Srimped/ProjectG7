<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminControllerWithRepos extends Controller
{
    public function index()
    {


        $admin = AdminRepos::getAllAdmin();
        if($key = request()->key)
            {
                //The LIKE command is used in a WHERE clause to search for a specified pattern in a column.
                //You can use two wildcards with LIKE:
                //% - Represents zero, one, or multiple characters
                //_ - Represents a single character (MS Access uses a question mark (?) instead)
                $key = DB::table('admin')->where('Ad_Name','like','%'.$key.'%')->get();
                $admin= $key;
            }
        return view('Harvel.Admin.index',
            [
                'admin' => $admin,
            ]);
    }

    public function show($Ad_Id)
    {
        $admin = AdminRepos::getAdminById($Ad_Id);
        return view('Harvel.Admin.show',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function create()
    {

        return view(
            'Harvel.Admin.new',
            ["admin" => (object)[
                'Ad_Id' => '',
                'username' => '',
                'password' => '',
                'Ad_Name' => '',
                'Ad_Email' => '',
                'Ad_Phonenumber' => '',
            ]]);

    }

    public function edit($Ad_Id)
    {
        $admin = AdminRepos::getAdminById($Ad_Id);
        return view(
            'Harvel.Admin.update',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $Ad_Id)
    {
        if ($Ad_Id != $request->input('Ad_Id')) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $admin = (object)[
            'Ad_Id' => $request-> Ad_Id,
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'Ad_Name' => $request->input('Ad_Name'),
            'Ad_Email' => $request->input('Ad_Email'),
            'Ad_Phonenumber' => $request->input('Ad_Phonenumber'),
        ];
        AdminRepos::update($admin);

        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($Ad_Id){
        $admin = AdminRepos::getAdminById($Ad_Id); //this is always an array

        return view('Harvel.Admin.confirm',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function destroy(Request $request, $Ad_Id)
    {
        if ($request->input('Ad_Id') != $Ad_Id) {
            return redirect()->action('AdminSessionController@index');
        }

        AdminRepos::delete($Ad_Id);


        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {

        return Validator::make(
            $request->all(),
            [
                'username' => ['required','min:3'],
                'password' => ['required','alpha_num','min:7'],
                'Ad_Name' => ['required'],
                'Ad_Email' => ['required', 'email'],
                'Ad_Phonenumber' => ['required', 'starts_with:0', 'digits:10'],
            ]
        );
    }


}
