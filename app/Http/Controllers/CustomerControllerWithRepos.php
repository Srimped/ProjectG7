<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CustomerControllerWithRepos extends Controller
{
    public function index()
    {
        $customer = CustomerRepos::getAllCus();
        if($key = request()->key)
                {
                    $key = DB::table('customer')->where('Cus_Name','like','%'.$key.'%')->get();
                    $customer= $key;
                }
        return view('Harvel.Customer.index',
            [
                'customer' => $customer,
            ]);
    }

    public function show($Cus_Id)
    {

        $customer = CustomerRepos::getCusById($Cus_Id);
        return view('Harvel.Customer.show',
            [
                'customer' => $customer[0]
            ]
        );
    }

    public function create()
    {

        return view(
            'Harvel.Customer.new',
            ["customer" => (object)[
                'Cus_Id' => '',
                'Cus_Name' => '',
                'Cus_Email' => '',
                'Cus_Phonenumber' => '',
                'location' => '',
            ]]);

    }

    public function edit($Cus_Id)
    {
        $customer = CustomerRepos::getCusById($Cus_Id);
        return view(
            'Harvel.Customer.update',
            ["customer" => $customer[0]]);
    }

    public function update(Request $request, $Cus_Id)
    {
        if ($Cus_Id != $request->input('Cus_Id')) {
            return redirect()->action('CustomerControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $customer = (object)[
            'Cus_Id' => $request-> Cus_Id,
            'Cus_Name' => $request->input('Cus_Name'),
            'Cus_Email' => $request->input('Cus_Email'),
            'Cus_Phonenumber' => $request->input('Cus_Phonenumber'),
            'location' => $request->input('location'),
        ];
        CustomerRepos::update($customer);

        return redirect()->action('CustomerControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($Cus_Id){
        $customer = CustomerRepos::getCusById($Cus_Id); //this is always an array

        return view('Harvel.Customer.confirm',
            [
                'customer' => $customer[0]
            ]
        );
    }

    public function destroy(Request $request, $Cus_Id)
    {
        if ($request->input('Cus_Id') != $Cus_Id) {
            return redirect()->action('CustomerSessionController@index');
        }

        CustomerRepos::delete($Cus_Id);


        return redirect()->action('CustomerControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {

        return Validator::make(
            $request->all(),
            [
                'location' => ['required',],
                'Cus_Name' => ['required'],
                'Cus_Email' => ['required', 'email'],
                'Cus_Phonenumber' => ['required', 'starts_with:0', 'numeric', 'size:10'],
            ]
        );
    }


}
