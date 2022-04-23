<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('Harvel.manualAuth.register',
            ["customer" => (object)[
                'Cus_Id' => '',
                'Cus_Name' => '',
                'Cus_Email' => '',
                'Cus_Phonenumber' => '',
                'location'=>'',
            ]]);
    }

    public function registered(Request $request)
    {
        $this->formValidate($request)->validate();
        $customer = (object)[
            'Cus_Name'=>$request->input('Cus_Name'),
            'location'=>$request->input('location'),
            'Cus_Email'=>$request->input('Cus_Email'),
            'Cus_Phonenumber'=>$request->input('Cus_Phonenumber'),
            'Cus_Id'=>$request->input('Cus_Id'),
        ];

        $newId = CustomerRepos::insert($customer);

        return redirect()
            ->action('MainController@home');
    }

    private function formValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Cus_Name'=>['required','min:3'],
                'location'=>['required','min:5'],
                'Cus_Email' =>['required','Email'],
                'Cus_Phonenumber' =>['required','min:10', 'max:10'],
            ]);
    }
}
