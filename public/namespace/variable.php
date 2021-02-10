<?php //变量的命名空间:变量默认为全局作用
namespace a{

    $var= "我是变量a"; //a空间的变量$var
    echo $var."<br/>";
    const CITY="杭州";  //a空间中的常量CITY

}

namespace b{
    echo $var."<br/>"; //a空间的变量$var
}

namespace {
    echo $var."<br/>"; //a空间的变量$var
    echo a\CITY;  //访问ａ空间的常量CITY
}

