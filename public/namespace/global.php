<?php
namespace my;
$name="lingen";
$obj=new \stdClass;
function strtoupper($str){ //在私有命名空间内部可创建与全局重名函数
    return \strtoupper($str);//访问全局函数时必须加全局空间标识＼
}
echo strtoupper($name);