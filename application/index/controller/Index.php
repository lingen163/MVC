<?php
namespace app\index\controller;
use \app\index\model\Model;
use \app\index\view\View;
class Index
{
    public function index()
    {   
           //$data=Model::getData();  //静态方法访问
        //$data=(new Model)->getData();　　//new对象来访问
          //echo View::disPlay($data);
        //return json($data);
        return view();

 
    }
}
