<?php //函数的命名空间
namespace a{
        function hello (){
            echo"hello1";
        } 
    }

    namespace b{
        function hello(){
            echo \a\hello(); //b空间内调用a空间的hello()函数，必须写全路径从\开始
            echo "hello2";
        }
    }

    namespace{
        //echo a\hello();  //a空间的函数hello()
        echo \b\hello();  //b空间的函数hello()
    }

