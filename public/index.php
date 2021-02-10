<?php
// [ 应用入口文件 ]
// // // 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// // // 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
// // //http://127.0.0.1/index.php?c=controller&a=show



// require_once(__DIR__.'./../application/index/model/Index.php');//导入模型
// require_once(__DIR__.'./../application/index/view/Index.php');//导入视图
// require_once(__DIR__.'./../application/index/controller/Index.php');//导入控制器

// // // Controller::show();  //静态调用show()方法

// $c=isset($_GET["c"])?($_GET["c"]):"Index"; //get获取地址传值c=controller,假如无默认"controller"
// $a=isset($_GET["a"])?($_GET["a"]):"show";//get获取地址传值a=show,假如无默认"show"
// // //var_dump($a);die();
// (new \app\index\$c)->$a();

// //echo (new \app\index\controller\Index\$c)->$a();

// // $controller=new \app\index\Controller\$c(); //实例化控制器类，获取控制器对象$controller
// // $controller->$a();//调用控制器中的show()方法
// // //var_dump($b);