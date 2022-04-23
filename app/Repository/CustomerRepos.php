<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCus() {
        $sqlcus = 'select cus.* ';
        $sqlcus .= 'from customer as cus ';
        $sqlcus .= 'order by cus.Cus_Name';

        return DB::select ($sqlcus);
    }

    public static  function insert($customer){
        $sqlcus = 'insert into customer ';
        $sqlcus .= '(Cus_Name, location, Cus_Email, Cus_Phonenumber, Cus_Id) ';
        $sqlcus .= 'values (?, ?, ?, ?, ?) ';

        $result =  DB::insert($sqlcus, [$customer -> Cus_Name, $customer -> location,
            $customer -> Cus_Email, $customer -> Cus_Phonenumber, $customer -> Cus_Id]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function getCusById($Cus_Id){
        $sqlcus = 'select cus.* ';
        $sqlcus .= 'from customer as cus ';
        $sqlcus .= 'where cus.Cus_Id = ? ';

        return DB::select($sqlcus, [$Cus_Id]);
    }

    public static function update($customer){
        $sqlcus = 'update customer ';
        $sqlcus .= 'set Cus_Name = ?, Cus_Email = ?, Cus_Phonenumber = ?, location = ? ';
        $sqlcus .= 'where Cus_Id = ? ';

        DB::update($sqlcus, [$customer->Cus_Name, $customer-> Cus_Email, $customer -> Cus_Phonenumber
        ,$customer-> location, $customer -> Cus_Id ]);

    }

    public static function delete($Cus_Id){
        $sqlcus = 'delete from customer ';
        $sqlcus .= 'where Cus_Id = ? ';

        DB::delete($sqlcus, [$Cus_Id]);
    }
}
