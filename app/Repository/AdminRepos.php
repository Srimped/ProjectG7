<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin() {
        $sqla = 'select a.* ';
        $sqla .= 'from admin as a ';
        $sqla .= 'order by a.Ad_Name';

        return DB::select ($sqla);
    }

    public static function getAdminById($Ad_Id){
        $sqla = 'select a.* ';
        $sqla .= 'from admin as a ';
        $sqla .= 'where a.Ad_Id = ? ';

        return DB::select($sqla, [$Ad_Id]);
    }

    public static function update($admin){
        $sqla = 'update admin ';
        $sqla .= 'set username = ?, password = ?, Ad_Name = ?, Ad_Email = ?, Ad_Phonenumber = ? ';
        $sqla .= 'where Ad_Id = ? ';

        DB::update($sqla, [$admin->username, $admin->password, $admin->Ad_Name, $admin-> Ad_Email,
         $admin -> Ad_Phonenumber ,$admin -> Ad_Id ]);

    }

    public static function delete($Ad_Id){
        $sqla = 'delete from admin ';
        $sqla .= 'where Ad_Id = ? ';

        DB::delete($sqla, [$Ad_Id]);
    }
}
