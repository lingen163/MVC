<?php //常量的命名空间
namespace a{
    const STN="我是常量a";
    define('STA','我是中国人');  //define创建常量默认为全局，不受命名空间限制
}
    

namespace b{
    const STN="我是常量b";
}

namespace {
    echo a\STN;
    echo STA;
}
