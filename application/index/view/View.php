<?php
namespace app\index\view;
class View{
    public static function display($data){
        $table='<h2 align=center>用户信息表</h2>';
        $table.='<table border=1 cellspacing=0 align=center width=50%>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>phone</th>
        </tr>';
        foreach($data as $value){
            $table.='<tr align=center>';
            $table.='<td>'.$value["id"].'</td>';
            $table.='<td>'.$value["name"].'</td>';
            $table.='<td>'.$value["age"].'</td>';
            $table.='<td>'.$value["phone"].'</td>';
            $table.='</tr>';
        };
        $table.='</table>';
        return $table;
    }
}