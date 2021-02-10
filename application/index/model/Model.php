<?php
namespace app\index\model;
class Model{
    public static function getData(){
        $data=[
            ["id"=>1,"name"=>"tom","age"=>12,"phone"=>"13456789493"],
            ["id"=>2,"name"=>"lee","age"=>11,"phone"=>"13868758987"],
            ["id"=>3,"name"=>"jack","age"=>17,"phone"=>"13588487665"],
            ["id"=>4,"name"=>"Peter ","age"=>15,"phone"=>"13987379092"]
        ];
        return $data;
    }

}