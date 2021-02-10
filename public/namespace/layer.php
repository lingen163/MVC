<?php //命名空间分级机制
//将命名空间进行分级管理，可以使不同空间的代码之间的逻辑关系更加的清晰；
//将有一定层级关系的的标识间用反斜线进行分隔　＼
namespace father{
    const STN="我是常量A";


}

namespace father\son{
    const STN="我是常量B";

}

namespace {
    echo father\STN.'-'.father\son\STN;
}

