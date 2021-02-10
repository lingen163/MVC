<?php
namespace app\admin;  //父空间
const CITY="台州<br/>";
function getData(){
    return "我是天台<br/>";
}
class Demo{
    public static function show(){
        return "我是临海<br/><hr>";
    }
}

//1.非限定名称(省略空间名称/默认空间名称)
echo  CITY;//父空间直接输出
echo  getData();//父空间直接输出
echo  Demo::show();//父空间直接输出

//2.限定名称（通常用在子空间,前面必须加命名空间才能访问）
namespace app\admin\user; //子空间
const CITY="杭州<br/>";
function getData(){
    return "我是富阳<br/>";
}
class Demo{
    public static function show(){
        return "我是临安<br/><hr>";
    }
}
namespace app\admin;//父空间
echo  user\CITY;// 引用子空间直接输出
echo  user\getData();//引用子空间直接输出
echo  user\Demo::show();//引用子空间直接输出

//3.完全限定名称:从全局空间反反斜线开始
echo  \app\admin\CITY;//父空间直接输出
echo  \app\admin\getData();//父空间直接输出
echo  \app\admin\Demo::show();//父空间直接输出

echo  \app\admin\user\CITY;//子空间直接输出
echo  \app\admin\user\getData();//子空间直接输出
echo  \app\admin\user\Demo::show();//子空间直接输出


