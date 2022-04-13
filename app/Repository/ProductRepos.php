<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ProductRepos
{
    public static function getAllProduct() {
        $sqlp = 'select p.* ';
        $sqlp .= 'from product as p ';
        $sqlp .= 'order by p.Prod_Name';

        return DB::select ($sqlp);
    }

    public static function getProductById($Prod_Id){
        $sqlp = 'select p.* ';
        $sqlp .= 'from product as p ';
        $sqlp .= 'where p.Prod_Id = ? ';

        return DB::select($sqlp, [$Prod_Id]);
    }

    public static function insert($product){
        $sqlp = 'insert into product ';
        $sqlp .= '(Prod_Name, Cate_Id, price, description) ';
        $sqlp .= 'values (?, ?, ?, ?) ';

        $result =  DB::insert($sqlp, [$product -> Prod_Name, $product -> Prod_Image,$product -> Cate_Id,
        $product -> price, $product -> description]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($product){
        $sqlp = 'update product ';
        $sqlp .= 'set Cate_Id = ?, Prod_Name = ?, price = ?, description = ? ';
        $sqlp .= 'where Prod_Id = ? ';

        DB::update($sqlp, [$product->Cate_Id, $product->Prod_Name, $product->price,
        $product-> description ,$product -> Prod_Id ]);

    }

    public static function delete($Prod_Id){
        $sqlp = 'delete from product ';
        $sqlp .= 'where Prod_Id = ? ';

        DB::delete($sqlp, [$Prod_Id]);
    }
}
