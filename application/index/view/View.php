<?php
namespace app\index\view;
class View{
    public static function display($data){
        $table='<h2>用户信息表</h2>';
        $table.='<table >
        <h2>用户信息表</h2>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>phone</th>
        </tr>';
        foreach($data as $value){
            $table.='<tr>';
            $table.='<td>$value["id"]</td>';
            $table.='<td>$value["id"]</td>';
            $table.='<td>$value["id"]</td>';
            $table.='<td>$value["id"]</td>';
            $table.='</tr>';
        };
        $table.='</table>';
        return $table;
    }
}