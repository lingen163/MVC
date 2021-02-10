<?php //类的命名空间
namespace a{
    class A {
        public $name="lingen11";
        public function say(){
            return $this->name;
        }
    } 
}

namespace b{
    class A {
        public $name="lingen2";
        public function say(){
            //return $this->name;
            $nameSpace='命名空间：'.__NAMESPACE__."<br/>";
            $className='类名：'.__CLASS__."<br/>";
            $methodName='方法名：'.__METHOD__."<br/>";
            $temp=(new \a\A)->name;  //调用a空间的say()
            return $nameSpace.$className.$methodName.$temp;
        }
    } 
}

namespace {
   //echo (new a\A)->say(); //A空间里的A类，调用say()
   echo (new b\A)->say(); //B空间里的B类，调用say()
}
