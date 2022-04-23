<?php

namespace App\Http\Controllers;
use App\Repository\AdminRepos;
use App\Repository\CustomerRepos;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ManualAuthController extends Controller
{
    public function ask(){
        return view ('Harvel.manualAuth.login');
    }

    public function signin(Request $request)
    {

        $username = $request->input('username');
        $password = sha1($request->input('password'));

        $account = AdminRepos::getAllAdmin();

        $this->formValidate($request)->validate();

        for($i = 0; $i < count($account); $i++)
            if($username == $account[$i]->username && $password == $account[$i]->password) break;
        if($i < count($account))
            {
                Session::put('username', $request->input('username'));
                return redirect()->route('admin.index');
            }
        else return redirect()->route('auth.ask');

        return redirect()->route('admin.index');
    }

    public function signout()
    {
        if(Session::has('username')){Session::forget('username');}
        return redirect()->action('ManualAuthController@ask');
    }

    private function formValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'username'=>['required','min:3'],
                'password'=>['required','alpha_num','min:7',
                    function ($attribute, $value, $fail) use ($request)
                    {
                        $username = $request->input('username');
                        $account = AdminRepos::getAllAdmin();
                        $n=0;
                        for($i=0;$i<count($account);$i++)
                        {
                            if($username == $account[$i]->username)
                            {
                                $value = sha1($request->input('password'));
                                if($value != $account[$i]->password) {$n++;break;}
                            }
                        }
                        if($n!=0) $fail('Password is incorrect');
                    }],
            ]);
    }
}
