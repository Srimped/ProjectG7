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
        return view('Harvel.Admin.index',['admin' => $admin,]);
    }

    public function show($Ad_Id)
    {
        $admin = AdminRepos::getAdminById($Ad_Id);
        return view('Harvel.Admin.show',['admin' => $admin[0]]);
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
            return redirect()->action('AdminControllerWithRepos@index');
        }

        $this->formValidate($request)->validate();

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
                'password' => ['required','min:7',
                function ($attribute, $value, $fail) use ($request)
                    {
                        $username = $request->input('username');
                        $account = AdminRepos::getAllAdmin();
                        $n=0;
                        for($i=0;$i<count($account);$i++)
                            {
                                if($username == $account[$i]->username)
                                    {
                                        $value = ($request->input('password'));
                                        if($value != $account[$i]->password)
                                            {
                                                $n++;break;
                                            }
                                    }
                            }
                                if($n!=0) $fail('Password is incorrect');
                    }],
                'Ad_Name' => ['required'],
                'Ad_Email' => ['required', 'email'],
                'Ad_Phonenumber' => ['required', 'starts_with:0', 'digits:10'],
            ]
        );
    }
}
