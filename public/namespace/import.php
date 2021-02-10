<?php 
// 命名空间的导入，本质上就是用一个别名，来简化一个比较长的多级空间名称
// 导入主要针对类，PHP5.6以后也支持常量和函数的导入
// 导入空间默认名称主要用use,空间简化的别名用as。
namespace app\index\controller;
const CITY="杭州,";
function say(){
    echo "生活品质之城，休闲文明之都--";
}
class User{
    public function hello(){
        echo  "我们在西湖边等你！";
    }
}

namespace my;
// echo \app\index\controller\CITY;  //访问app\index\controller　下的常量CITY
// echo \app\index\controller\say(); //访问app\index\controller　下的方法say()
// $c=(new \app\index\controller\User)->hello();//访问app\index\controller　下的类User下的方法hello()

// //用USE导入命名空间
// use const \app\index\controller\CITY;  //常量USE 
// use function \app\index\controller\say;//函数USE 
// use \app\index\controller\User;　//类的use
// echo CITY;
// echo say();
// $c=(new User)->hello();

//用as进一步简化空间名称
use const \app\index\controller\CITY as C; //简化常量为Ｃ
use function \app\index\controller\say as s;//简化函数（方法）为s
use \app\index\controller\User as U;//简化类User为Ｕ
echo C;//输出常量CITY
echo s();//输出方法say()
$c=(new U)->hello();//输出类User的方法hello()