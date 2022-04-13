<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCate() {
        $sqlc = 'select c.* ';
        $sqlc .= 'from category as c ';
        $sqlc .= 'order by c.Cate_Name';

        return DB::select ($sqlc);
    }

    public static function getCateById($Cate_Id){
        $sqlc = 'select c.* ';
        $sqlc .= 'from category as c ';
        $sqlc .= 'where c.Cate_Id = ? ';

        return DB::select($sqlc, [$Cate_Id]);
    }

    public static function getCateByProd_Id($Prod_Id)
    {
        $sqlc = 'select c.* ';
        $sqlc .= 'from category as c ';
        $sqlc .= 'join product as p on c.Cate_Id = p.Cate_Id ';
        $sqlc .= 'where p.Prod_Id = ?';

        return DB::select($sqlc, [$Prod_Id]);
    }

    public static function insert($category){
        $sqlc = 'insert into category ';
        $sqlc .= '(Cate_Name)';
        $sqlc .= 'values (?) ';

        $result =  DB::insert($sqlc, [$category -> Cate_Name]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($category){
        $sqlc = 'update category ';
        $sqlc .= 'set Cate_Name = ? ';
        $sqlc .= 'where Cate_Id = ? ';

        DB::update($sqlc, [$category->Cate_Name, $category -> Cate_Id ]);

    }

    public static function delete($Cate_Id){
        $sqlc = 'delete from category ';
        $sqlc .= 'where Cate_Id = ? ';

        DB::delete($sqlc, [$Cate_Id]);
    }
}
