    《PHP基础课笔记》
一 :PHP变量的命名规范

    $变量名 ＝ 变量值;

    变量以$开头

    变量名 是"字母,下滑线,数字的组合,并且数字不能做开头"

    用[0-9][A-Z][a-z][_]任意组合,但是,变量名的第一个字符不能[0-9],即不能以数字开头。

    变量名区分大小写。
 

    8种变量类型

    整型 (100,3,456)

    浮点型 (45.20)

    字符串  ('hello world')

    布尔型   (true/false)

    NULL型  (null)

    数组   (array)

    对象   (object)

    资源型  (resource)

    

    在php程序中，可修改浮点值与整型值，C语言中，代码是不允许的。
    

    直接echo 布尔型的时间,布尔型被转换成了字符串, 分别 1,''

    一个boolean TRUE 值被转换成 字符串"1"。 Boolean FALSE 被转换成"" (空的字符串)。

    
    布尔值只有两种,但是运算很重要；

    比如, 逻辑与,逻辑或,逻辑反,异或 ；

    
    echo  输出变量, 适宜于 整型,浮点型,字符串型, 这种标量类型

    print_r 适合后面要学的对象,数组,这种二维或多维结构的数据.

    var_dump,不仅可以打印数据,还可以打出数据的类型.

    

    null 类型为空，没有一个值。

    一个变量,什么时间为null ？

    1: 给一个变量 赋值为null, 相当于银行账户取消,卡消磁.

    2: 某个变量,被unset掉. (unset是销毁一个变量)

    3: 只声明,不赋值,也为null

      

    二 ：动态变量

    动态变量,即---变量名,还可以是一个变量

    PHP的语法非常灵活,允许变量名字,仍是一个变量.
 
    $a = 'hello';

    $hello = 'world';

    $world = 'china';

    echo $$$a;

    // $a : hello , $$a==$hello == world;  $$$a = $world == china;

    

    有些变量,根本就没有声明,去引用变量的时候,提示一个NOTICE.

    用isset 来检验 一个变量是否存在.

    $age = 23;

    

    if(isset($age)) {

        echo 'age变量已经声明了';

    } else {

        echo 'user变量根本就不存在';

    }

    

    变量类型的判断

    变量类型  is_int, is_float,is_bool, is_null

    

    $a = 123;

    if(is_int($a)) {

    echo 'a是int型','<br />';

    } else {

    echo 'a不是Int型,','<br />';

    }

    

    获取变量类型 gettype

    echo 'a是',gettype($a),'<br/>';

    

    unset把变量销毁，因为内存空间是有限的,销毁变量,可以腾出空间。

    

    传值赋值, 引用赋值

    = 号来赋值，传值赋值：会有内存空间存值。

    引用赋值：两个变量指向同一个地址.

    

    定义常量

    

    定义常量的方法

    define('HEIGHT','8846');

    常量引用 echo 常量名；

    echo HEIGHT;

    

    常量的重要特点,即"全局有效性",说白了,就是页面任意一处都能访问到。

    

    为什么要常量?

    答:因为有些重要的值,不希望被改变.

    

    因变量的值容易被修改，常量的特点:

    1:一旦定义,不能重新赋值.

    2:一旦定义,不能再次定义

    3:一旦定义,页面内任何角落都可以访问,没有"作用域"的限制

    

    常量的命名规范

    1:和变量一样

    2:习惯上大写

    

    

    常量的值的类型

    只能是标题类型: 整型,浮点型,字符串,布尔,NULL

    

    常量的检测

    defined('常量名') 来检测

    如果已定义,返回true

    如果未定义,返回false

    

    动态常量

    动态常量,需要用constant函数来实现

    contant($var),则会把$var 的值,当成一个常量的名,并解析出常量的值为.

    

    开发中,什么时间适合用常量

    比如:网站的根目录,D:/www/

    网站配置文件,不希望被更改,也可以写成常量.

    

    PHP程序如何进行加减乘除,取模

    依次是 + - * /  %

    

    逻列一下比较运算符

    > 大于

    < 小于

    >= 大于等于

    <= 小于等于

    == 等于

    != 不等于

    === 全等于,(不仅值相等,连变量类型也相等)

    !== 不全等于

    

    在不同的类型比较时,

    PHP程序本身

    会把变量转换成一致的类型,然后再去比较.

    

    着重记以下几个类型转换

    1: 布尔值 --> 字符串

    2: 字符串 --> 数字的转换

    3: 字符串 --> 布尔的转换

    4: 数字 ---> 布尔的转换

    5: 数字 ---> 字符串转换.

    

    其实有的语言中,根本就没有布尔型,都是拿 1, 0 充当 true/false用.

    0, 0.0, 这两个值,转换成布尔是 false,

    其他 都是true, 包括负数,也是true

    

    1: 布尔值 --> 字符串

    true --> '1'

    false ---> '';

    

    2: 字符串 --> 数字的转换

    从字符串左端开始找数字,直到第一个非数字结束,取出来的这一部分,即是转换后的值.

    '3q' ===> 3

    '123abc456' ===> 123

    'fdsafdsaf789' === > 0

    

    3: 字符串 --> 布尔的转换

    ''字符串,'0',这种转换成 false,

    其他一概是true

    

    4:数字转布尔

    只有整型的0,和浮点0.0, 转成false

    其他,甚至负数,也转成ture

    

    5:数字到字符串的转换

    直接是字面本身

    

    字符串运算符

    用 ' . '是先拼接,再整个输出.

    用 ' , '是挨个儿把3个变量输出.

    用','和用'.'  相比逗号输出快,因为省去了一次拼接计算的过程.

    

    赋值运算符, 就是 =

    作用是,把' = '右边的值,赋给左边的变

    

    比较运算符

    注意:比较运算符返回结果,只有2个可能  ture/ false

    

    以 $a == $b为例, 要么等,要么不等.

    要么是真,要么是假.

    3 == 2; 运算结果是: false

    

    字符串运算符

    $a . $b

    返回结果: , 拼接后的字符串

    

    赋值运算符的运算结果,就是 = 右边的值

    

    两个难点;

    1:比较运算时,有一个类型转换的问题.

    2: 凡运算,必有返回值.

    比较运算返回布尔值,

    赋值运算,返回赋的值本身.

    

    逻辑运算符:

    逻辑 或 || or, 

    逻辑 与 && and

    

    $a = 3;

    $b = 5;

    if( ($a == 3 && $b > 5) || ($a > 3 && $b == 5) ) {

        echo 'aaaa';

    } else {

        echo 'bbbb';

    }

    逻辑运算的 && 的优先级 比 || 高

    逻辑反

    一个命题如果是真命题,则其反命题, 是假命题.

    异或运算 xor

    异或是指, 两个条件必须"一个真,一个假,才为真"

    

    三元运算符

    条件? 返回值 1 : 返回值2    
    //相当于
    if(条件为真){
        执行返回值1;
    }else{
        执行返回值2;
    }
    如果条件为真,则返回值1, 否则,返回值2

    

    $user = 'zhangsan';    

    if($user != '') {

        echo $user;

    } else {

        echo '游客';

    }    

    echo '<br />';   

    $res = ($user!=''?$user:'游客');

    echo $res;

    $user = '';

    echo '<br />';

    echo $user!=''?$user:'游客';

    


    程序如果没用三元运算符,可以用什么代替?

    可以用if/else代替.

    三元只是一个简化的写法.

    而且效率没有if else 高.

    

    递增 递减运算符

    $b = 2;

    $a = $b++;

    echo $a,'~',$b,'<br />'; // 2~3

    $b = 2;

    $a = ++$b;

    echo $a,'~',$b,'<br />'; // 3~3

    

    $b = 3;

    $a = $b--;

    echo $a,'~',$b,'<br />'; // 3~2

    $b = 3;

    $a = --$b;

    echo $a,'~',$b,'<br />'; // 2~2

    

    位运算符 说白了就是  二进制+逻辑运算符

    位运算符还没整太懂。

    

    

    1、控制结构之顺序和分支

        控制结构就是流程控制;

        共有3种控制结构

        顺序:顺序结构,就是语句按照你书写的顺序,从前到后顺序执行.

    

    分支:

    if ,单路分支

    if /else ,双路分支, 双路分支中,if/else中的2个代码段,必有且只有一段被执行.

    if /else if /else if .../ else 多路分支.

    switch case ,用来比较被判断的变量的多种可能值时便于用.

    switch($day) {

        case 1:

            echo '';

            break;

        case 2:

            echo '';

            break;

        default:

            echo '';

    }

    if /else if/else 多路分支可代替switch case;

    if /else if 可用来判断范围,甚至更复杂的判断表达式也可以；而 case,却只能提供一个准备的值,和变量做 == 的比较，如果需要和几个确认的值比较是否相等,适合用switch；

    

    循环:编程语言,一般都有 for,while,do/while循环

    for(语句1;语句2;语句4) {

        语句3;

    }

    语句1, 先执行,且只执行1次.

    然后 语句2 判断,如为真,则执行语句3,然后执行语句4，再语句2判断..... 循环，直到语句2为假,for结束

    

    do/while 至少执行一次.

    $i = 0;

    while(++$i <= 100) {

        if($i % 15 == 0) {

            echo 'abcde<br />';

        } else if($i % 3 == 0) {

            echo 'Fizz<br />';

        } else if($i % 5 == 0) {

            echo 'Buzz<br />';

        } else {

            echo $i,'<br />';

    }

    }

    $hard = 20;

    do {

    

        $hard += $hit;

        if($hard >= 30) {

            echo $hard,'不服<br />';

        } else {

            echo $hard,'服了<br />';

        }

    

    } while($hard >= 30);

    

    for($i=5,$j=1; $i >= 1; $i--,$j++) {

        echo $i,'~~~~~',$j,'<br />';

    }

    

    3:百钱百鸡问题:

    《张丘建算经》成书于公元5世纪，作者是北魏人．书中最后一道题堪称亮点，通常也被称为“百钱买百鸡”问题，

    民间则流传着县令考问神童的佳话书中原文如下：

        今有鸡翁一，值钱五；鸡母一，值钱三；鸡雏三，值钱一；百钱买鸡百只，问鸡翁、母、雏各几何？

    题目的意思是，公鸡5文钱1只，母鸡3文钱1只，小鸡1文钱买3只，现在用100文钱共买了100只鸡，

    问：在这100只鸡中，公鸡、母鸡和小鸡各是多少只？（设每种至少一只）
 
    1只公鸡 5块钱；1只母鸡 3块； 3只小鸡 1块；

    拿了100块钱,买回来100只鸡；问:公鸡,母鸡,小鸡各几只?

    

    思路:

    公鸡 1-100只,；母鸡 1-100只；小鸡 1-100只；

    

    暴力组合

    for($g = 1;$g <= 100; $g++) {

        for($m = 1;$m <= 100; $m++) {

            for($x = 1; $x <= 100; $x++) {

                if(($g + $m + $x) == 100 && (5*$g + 3 * $m + $x/3) == 100) {

                    echo '公鸡',$g,',母鸡',$m,',小鸡',$x,'<br />';

                }

            }

        }

    }

    上面这个for循环,虽然算出来了解决,但效率很低.

    因为,如果运气非常差.

    要运行 100 * 100 * 100次 , 100W次.

    

    

    优化一下.

    因为公鸡 + 母鸡 + 小鸡 共100只, 因此 $x = 100 - $g - $m;

    

    for($g = 1;$g <= 100; $g++) {

        for($m = 1;$m <= 100; $m++) {

            $x = 100 - $g - $m;

            if(($g + $m + $x) == 100 && (5*$g + 3 * $m + $x/3) == 100) {

                echo '公鸡',$g,',母鸡',$m,',小鸡',$x,'<br />';

            }  

        }

    }

    

    这一次,优化掉一层for循环,运气最差,执行 100 * 100次.

    

    继续优化,因为公鸡每只5元,共100元,因此,公鸡不可能超过20只

    母鸡3元钱一只,不可能超过33只

    

    for($g = 1; $g <= 20; $g++) {

        for($m = 1; $m <= 33; $m++) {

            $x = 100 - $g - $m;

            if(($g + $m + $x) == 100 && (5*$g + 3 * $m + $x/3) == 100) {

                echo '公鸡',$g,',母鸡',$m,',小鸡',$x,'<br />';

            } 

        }

    }

    

    // 此时,利用边界条件,优化了效率,最多运行 20*33次.

    

    break有破坏的意思,直接破坏整个循环语句,不再往下执行了.

    continue是继续的意思,是说你继续下一次循环单元吧,这次的可以跳过了.

    

    假设某人有100,000现金。每经过一次路口需要进行一次交费。

    交费规则为当他现金大于50,000时每次需要交5%如果现金小于等于50,000时每次交5,000。

    请写一程序计算此人可以经过多少次这个路口。

    for($money = 100000,$num=0;$money >= 5000;) { // 看此处,第2个";"号后竟然是空的??

        if($money > 50000) {

            $money *= 0.95; // 扣了5%,即原来的0.95倍

        } else {

            $money -= 5000;

        }

    

        $num += 1; // 把过桥记录加1

        echo '第',$num,'次过桥后,剩余,',$money,'元<br />';

    }

    

    计算机用的是二进制，生活中用的十进制。

    

    (abcdef)10, 即10进制的abcdef的值是多少?

    f*10^0 + e*10^1 + d*10^2 + c*10^3 + b*10^4 + a *10^5

    

    扩展: 在M进制中, 基数的最大值是 M-1

    

    echo 1234,'<br />'; // 10进制的1234

    如果你想告诉PHP,你用的是8进制,请在数字前加0

    echo 01234,'<br />';

    

    在下面的这个例子,

    前面加0代表8进制

    而8进制,基数最大是7

    现在出了一个9,自然就是"违法的"

    碰到这种情况,PHP就会从9开始,把后面的值舍弃.

    

    echo 0239999,'<br />';

    

    前面加0x代表16进制

    碰到16才进位,0-15都是单个的基数来表示

    0 --------------------------->15

    0 1 2 3 4 5 6 7 8 9 a b c d e f

    ab(16)

    左数第1位, 权值是16^0,基数是b,值是 b * 16^0

    左数第2位, 权值是16^1,基数是a,值是 a * 16^`

    因此 == b * 16^0 + a * 16^1

    24(16) = 4*16^0 + 2*16^1 = 4 + 32 = 36

    

    

    在英语里,常常这么缩写进制

    Binary ：二进制数     10010100B

    Decimal：十进制数    148D（可省略）

    Octonary：八进制数   224O或Q

    HexaDecimal ：十六进制数  94H

    

    如何在PHP中表示2进制

    在PHP5.4中,已经开始引进二进制的直接表示

    echo PHP_VERSION;

    

    有个商人不小心把40磅的砝码摔碎了,摔成了4块,

    欲哭无泪时发现这4块砝码恰好可以组合成1-40的任意重量,

    求这4块碎砝码的质量。

    提示：组合的意思就不是单纯相加。

    因为天平，你懂的。例如：2=3-1

    N块砝码,一个天平,

    某一砝码可以放左边,也可以放右边,也可以不放.

    一个砝码表示 3种态位.

    可标识为 0 1 2

    [0/1/2][0/1/2][0/1/2][0/1/2]

    以上可以组合出一个3进制数字来

    想表示出连续的数字来,

    然后,每个位上的权值,也要符合3进制的规律

    权值是 1, 3,9, 27

    1-->1

    2-->3-1

    3-->3

    4-->3+1

    5-->9-3-1

    8瓶水,其中1瓶有毒, 拿小白鼠做试验,

    药效发挥需要2小时时间,才能让白鼠死.

    只给你2小时时间,

    问:最少,需要几只老鼠

    分析:

    毒死需要2个小时,只给2个小时==>只能试1次.

    分析: 2小时后,小白鼠,只有2种状态: 死/活

    2只小白鼠,则有4种组合的状态.

    N只小白鼠,则有2^N次组合的状态.

    一共只有8只老鼠,最多需要8种状态,就能区分.

    3只老鼠,组合8种状态.

    因此,从理论上说, 3只老鼠足够了.

    

    但3只老鼠如何试出来,自己用二进制的知识来组合一下.

    

    

    函数概念&声明&调用

    

    函数声明

    function foo($arg1,$arg2,$arg3) { // 可以有1个或N个参数

    return 值;// 可以return 值,也可以不return

    }

    

    函数调用

    foo();

    

    如果函数有参数，调用时必须有参数才行。

    参数一个变量名，在函数内发挥作用，参数的值来自于调用时传递的值。

    

    tea($cha);      形参在函数体内提供?? -->变量名

    tea(shuixian);  实参在函数体内提供?? -->值

    

    在函数调用过程中

    实参与形参对应赋给形参的，

    实参少于形参，会warning警告,并尽量往下执行.

    实参多于形参，后面多出来的实参,将会被舍弃掉. 没有其他副作用.

    

    默认参数，在调用时没有参数，就直接用调用默认参数，如果有实参将替换默认参数。

    如果要默认参数不被实参替换，默认参数写到最后面，实参不再写该参数的值。

    

    函数的执行权与执行权的交回.

    

    当函数语句运行完之后,执行权就交回.

    或者是碰到 return 之后,函数也会交回执行权.

    

    函数是可以没有"return 语句的",没有return 语句,返回 null

    有return，但为空，则返回值是 NULL

    函数只可以返回一个值，不可能返回两个值。

    

    动态函数：函数的名字可以用变量来表示。

    function wel() {

        echo '欢迎<br />';

    }

    function love() {

        echo '斯密达<br />';

    }

    $func = $_GET['func'];

    echo $func,'<br />'; 

    

    $func();

    函数参数的的引用赋值

    $age = 19;

    function foo(&$num) // 此处,即是指,传参,不再是传实参的值,而是传实参的地址

    {

        $num = &$age;  // 此时,函数内部的$num,指向外部的一个全局变量的地址.

        $num += 5;     // 因此,num变,影响了外部了的$age变.

    }

    echo $age,'<br />'; // $age受到了foo函数的影响,

    

    同时,我们也可以看到，函数局部内的变量和全局的变量，并不是水火不容,谁都有机会碰到谁的，是有机会相互影响的, 比如上面的 引用传参.

    

    九大超级变局变量[注意,全大写]

    $_GET   // 地址栏的参数

    $_POST  // 接POST型的表单参数经(比如,用户注册时的内容,往往用$_POST来接)

    $_REQUEST // 默认情况下包含了 $_GET，$_POST 和 $_COOKIE 的数组,即$_REQUEST是前3者一个并集

            // 比如不想区分 $_GET,$_POST,可以用$_REQUEST来代替
   

    $_FILES  // 文件上传时学
   
    $_COOKIE   //

    $_SESSION  // 用户登陆时学
   
    $_ENV

    $_SERVER   // 服务器还有访客的一些信息
    
    $GLOBALS  // 所有变量的一个注册表
    
    超全局变量,即使在函数内,甚至深层调用的函数内,也一样能接收到.

    

    

    1、字符串的定义

    $str1 = "hello";

    用双引号,来声明字符串的时候,内部不能再出现双引号,因为,双引号被当成字符串的"边界"来对待,因此,内部出现双引号,就引起了解释上的歧义.这时,可以用转义字符.

    \\  \'  \'  \"  \"  \n  \r  \$

    \n 转义成 换行符

    \r 转义成 回车符

    

    2、单双引号定义字符串有何区别?

    转义上的区别:

    单引号,系统不做复杂的转义,只转义\',\\, 其他的一律原样输出.

    双引号,则转义的比较多,\",\\,\r,\n,\t,\$等.

    

    单引号比双引号解析的更快，因不需要进行过多的转义和变量解析。

    

    对于变量解释的区别:

    单引号,不对字符串的$作变量名解析,。

    双引号,会试着$理解成变量名,来解析。

    

    只解析文本用单引号；如果变量文本一起解析，需要用双引号。

    

    单引号与双引号集中在一起使用比较麻烦时，可以用heredoc,nowdoc两种界定字符串的方式。

    heredoc的写法

    <<<标识符

    中间写大段的文本

    标识符;

    注意:

    1:标识符的名称和变量名的要求一样.

    2:heredoc的标识符,一定是独占一行,而且前面没有任何其他字符.

    3:heredoc对文本的处理,和 双引号一样,即\r\n\t,变量,等,能解析出来.

    

    nowdoc写法与heredoc写法一样，,唯独在标识符两边用单引号包起来,大段文本的解析,就和单引号一样的效果.不转义 \n \r \t,变量等等

    

    3、字符串常用函数分类

    字符长度函数

    查找字符位置函数：

    字符串替换函数

    提取子字符函数（双字节）

    分割,连接,反转函数

    去除,增加空格函数

    HTML代码/数据库安全处理有关函数

    比较字符函数

    字符大小写转换函数

    

    字符长度函数；

    int strlen($srt) 计算字符长度

    int mb_srtlen(string $str[,string $encoding]);

    echo mb_strlen($str,'utf-8');

    strlen 是计算字符串"字节"长度

    mb_strlen,是根据编码,计算字符串的"字符"个数.

    

    查找字符串位置函数；

    echo strpos($str,'fine')；

    strpos($str,'fine',17);   offset 的意思是 ---偏移量，就是说,把光标先偏移一段距离,再查找,别从头查找.

    strpos需要用＝＝＝区分0与false的类型

    function findsub2($str,$find) {

        if(strpos($str,$find) === false){

            return false;

        } else {

            return true;

        }

    

    字符串替换函数

    str_replace('hi','hello',$str);

    str_replace('hi','hello',$str,$num)

    可以用数组参数,指定多种替换.

    $search = array('hi','li');

    $replace = array('hello','ul');

    $newstr = str_replace($search,$replace,$str);

    echo $newstr,'<br />';

    

    strtr($str,'hi','ab');

    一个字符对一个字符替换的，被替换的字符比原字符长，多出来的将会省略。

    strtr($str,array('A'=>'a','B'=>'b'));

    

    substr截取子字符串

    string substr ( string $string , int $start [, int $length ] )

    $string: 待截取的长字符串

    start: 截取开始的位置

    $length: 正数时代表截取的长度,负数时代表截取结束的位置

    当第3个参数,不指定时,截取到字符串的"结尾"。

    substr($str,3);  直到最后结束

    substr($str,-3); 从后向前截取

    substr($str,0,3);从开头截取

    substr($str,3,-3)从中间截取

    

    strstr($str,$needle)；

    作用: 是在$str中找到指定的$needle,而且是$needle第一次出现的位置,返回该位置直到字符串结尾的这一部分内容。

    strstr($str,'.',true)； 如果加true返回 .  之前的内容。

    strrchr($str,'.')；最后一次出现的位置找出来,从该位置,一直截到结尾.

    

    str_split字符串分割,连接,反转函数

    str_split($str);拆成每个单元一个字符的数组。

    str_split($str,2);拆成两个单元一个字符的数组。

    explode(',',$str);是根据指定的分割符,把字符串拆成数组.

    implode('~',$arr);implode,是根据指定的连接符,把数组再拼接成字符串。

    

    chunk_split空白处理函数

    chunk_split($str,3,',');

    

    addslashes字符转义函数

    addslashes($str)     单引号被转义成 \'

    stripslashes($str2)  \'被转义成单引号

    htmlspecialchars --> 特殊符号转成html实体

    htmlspecialchars_decode--> 实体转成符号

    

    strcmp字符串比较函数，返回的为整数型，相等返回0；

    if(strcmp('D','a') > 0) {

        echo 'D&gt;a';

    } else if(strcmp('D','a') < 0) {

        echo 'D &lt; a';

    } else {

        echo '相等';

    }

    

    字符串转换函数

    strtolower($str); 转成小写

    strtoupper($str); 转成大写

    ucfirst($str); 每个单词的首字母大写

    ucfirst(strtolower($str));每个单词只做首字母大写，其它小写。

    

    strrev($str); 系统自带的字符串反转函数.

    

    

    数组就是键值对的集合

    数组最重要的2个概念

    1: 柜子的编号----> 键/key/index/索引/下标

    (一般而言,编号是字符时,叫"键/key",编号是数字时,叫"索引/index")

    2: 储存的内容----> 值/value

    $stu = array('name'=>'芬','gender','female');  //声明数组的方式

    print_r($stu);      //打印数组

    echo $stu['name'];  //读取数组单元

    unset($stu['name']); //删除一个单元

    $sta[] = '芬';  //声明数组的方式

    

    数组的键可以为空

    $class[] = '张三';

    $class[] = '李四';

    $class[5] = '王五';

    $class[] = '赵六';

    $class[] = '郑七';

    print_r($class);

    数组的键默认是从0开始一直+1增长

    如果赋值则覆盖默认键，并且从最大的键继续+1增长

    

    数组的值可以为8种变量类型。

    以数组为值的数组为二维数组，如果数组的值依然为数组，超过二维的为多维数组。

    $class['stu1'] = array('name'=>'张三','age'=>'28'); // 二维数组。

    print_r($class);

    echo $class['stu1']['age'];  //二维数组的读取方法。

    

    在PHP中,key/index可以是字符串,也可以是数字。索引数组/关联数组。

    count($stu); 计算数组的单元个数。

    

    循环读取单元

    $arr = array('春','夏','秋','冬');

    //echo count($arr),'<br />';         //计算数组的单元个数。

    for($i=0,$len = count($arr);$i<$len;$i++) {

        echo $arr[$i],'<br />';

    }

    foreach($arr as $k=>$v) { // 这是说:循环数组的每个单元,把单元的键赋给$k,值赋给$v

        echo $k,'~',$v,'<br />';

    }

    echo $k,'~',$v; // 停留在最后一次赋值的情况

    foreach($arr as $v) { // 这是说:循环数组的每个单元,把单元的值,赋给$v

    foreach($arr as $k) {

        echo $k,'<br />'; // 打印的还是值,$k只是被赋值而已

    }

    foreach 语言结构不会相互影响，会自动重置reset数组。

    数组的游标操作

    current,key,  // 指的是数组内“当前”键和对应的值。

    $arr = array('中','华','人','民');

    current($arr);  //打印值

    key($arr);      //打印键

    

    next,prev,reset end  //在数组内移动选择单元。

    next($arr);          //在数组内向下移动一个单元。

    echo current($arr),'<br />';

    echo key($arr);

    指针为空时值 false/null

    

    end($arr);  //把指针指向数组的最后一个单元

    prev($arr); //指针往头部移动一下

    echo current($arr),key($arr),'<br />';

    reset($arr); //可以重置,使数组的指针归0,指向开头处

    

    指针走2步,退1步

    reset($arr); // 使数组的指针归0,指向开头处

    for($flag = true;current($arr);) {

        echo current($arr),'<br />';

        if($flag) {

            next($arr);

            next($arr);

            $flag = false;

        } else {

            prev($arr);

            $flag = true;

        }

    }

    

    for+游标操作：当指针指向0的时候,0为假,因此,for循环退出

    $arr = array(-3,-2,-1,0,1,2,3);

    for(;current($arr);next($arr)) {   //第二个参数为假

        echo current($arr),'<br />';

    }

    

    each 取出指针所指单元的键和值,组合成一个数组返回,并把指针往尾部移.

    array(

    1=>'单元值',

    'value'=>'单元值',

    0=>'单元的键',

    'key'=>'单元的键'

    )

    如果 取不出来单元,返回false

    

    list能够给多个变量赋值,即把数组的多个单元分别赋给多个值。

    把数组的单元按照索引的排列顺序，按照从右往左的顺序赋值给变量。

    如果单元不存在，当成NULL来处理

    

    list($arr[0],$arr[1],$arr[2]) = array(3=>'赵',1=>'钱',5=>'孙',2=>'李',0=>'燕');

    print_r($arr);

    

    先从左到右来对应着分配值

    $arr[0] <====> array[0] 燕

    $arr[1] <====> array[1] 钱

    $arr[2] <====> array[3] 赵

    

    分配完毕,开始赋值!!!!

    从右到左赋值

    $arr[2] = 赵

    $arr[1] = 钱

    $arr[0] = 燕

    

    打印以创建时的顺序开打印。

    array(

    2=>'赵',

    1=>'钱',

    0=>'燕'

    )

    

    用each + list 自己写一个模拟foreach的函数

    function for_each($arr) {

        while(list($k,$v) = each($arr)) {

            echo $k,$v,'<br />';

        }

    }

    $arr = array('虎','驴','马','狼');

    for_each($arr);

    

    echo $arr[1];  //整数的索引不需要加单双引号，加了会影响效率。

    echo $arr['name']; //字符串索引没加单双引号，会先理解成常量，如无，再理解为字符串。因此必加单引号。

    

    

    数组函数

    count 函数 计算数组的单元个数[或对象的属性个数]

    注:count函数的参数,可以是数组,也可以是"非数组"

    返回值分3种情况讨论

    1: 数组/对象, 返回数组的单元个数/对象的属性个数

    2: NULL ,返回0

    3: 非数组,也非NULL,通通返回1

    echo count($arr);

    echo count($arr,true);  //第2个参数为true时,代表递归的来计算数组的单元个数.

    

    array_key_exists  //数组键存在, 用来判断数组有没有某一个键

    in_array 判断数组是否有某个值。

    in_array('小刚',$arr)

    

    有2个办法,用isset

    if(isset($arr['age'])) {

        echo $arr['abc'];

    } else {

        echo '$arr["abc"]不存在<br />';

    }

    

    用函数 array_key_exists来判断

    if(array_key_exists('abc',$arr)) {

        echo '有abc键';

    } else {

        echo '$arr["abc"]不存在<br />';

    }

    

    var_dump(isset($arr['kaka']));  // false

    var_dump(isset($arr[0]));       // true

    

    用isset和array_key_exists来判断

    有什么区别呢?

    

    isset 不是函数,是语法结构

    而array_key_exists是函数

    速度上,isset省去了一次函数调用,速度要快些.

    

    isset来判断是根据值来判断的,如果某个单元的值为 NULL,依然是返回false,因为 isset是靠值来判断的.

    如果对于键/值的都不固定,不确定是否有NULL存在,请用 array_key_exists来判断。

    

    isset是用来判断变量是否设置的,不限于数组

    array_flip // 交换键值, 即值做键,键做值。不改变原数组,只是做为参数传给函数而已.

    array_flip($arr);  如果数组的键重复，后面的覆盖前面键。

    range(1.10) : 生成一个指定范围的数组

    array_sum(): 计算数组所有单元的值的和

    $arr = range(1,10);  //生成数组

    print_r($arr);

    echo array_sum($arr); //计算总和

    shuffle //随机生成打乱数组，验证码生成。

    shuffle($arr);

    array_unique($arr);  数组键值去重复，元素重复时，键名不改变，取先出现的键值放到返回数组中。添加元素时，重复则不再添加

    array_revaerse 数组的顺序反转调用，如果数字索引则需要加true来强制一起反转索引，关联数组则不用。

    $arr = array('春','夏','秋','冬');

    print_r($arr);

    print_r(array_reverse($arr));  // 此时,对于索引数组,索引没调过来,只调换的值

    print_r(array_reverse($arr,true)); // 如果想强制把索引也调过来,可以加第2个参数

    

    array_push

    array_pop

    array_shift

    array_unshift

    array_push($arr,'北');  作用是往数组的尾部压入单元。返回值是: 压入单元成功后,数组的单元个数。array_push是引用传值,直接影响参数数组本身。

    array_pop($arr);  作用是弹出并去掉最后一个单元。返回值是弹出的值。array_pop是引用传参,直接影响参数数组的值 
    
    array_shift($arr);  作用是 弹出并剪切数组的第一个单元。返回是弹出的单元值。array_shift是引用传参,影响参数数组,在剪切首单元之后,会把索引重新整理,从0开始计数,

    如果是字符串做键,则不受影响.

    

    array_unshift($arr,'东');  作用是把单元追加到数组的头部,返回值是追加后,新数组的单元个数。引用传参,影响参数的值。在头部新加单元后, 索引从0重新排。

    案例：

    function formstr($str) {

        $bak = array();

        $arr = str_split($str);

    

        $i = 0;

    

        while($cnt = count($arr)) {

            array_unshift($bak,array_pop($arr));

            $i++;

            if($i%3==0 && $cnt != 1) { // $cnt!=1的意义仔细思考一下

                array_unshift($bak,',');

            }

        }

    

        return implode($bak);

    }

    

    $str = '1234567';

    print_r(formstr($str));echo '<br />'; // 1,234,567

    

    字符串和数组怎么取长度?

    答:字符串用 strlen ,mb_strlen

    数组用count

    

    

    mysql_connect()函数来连数据库

    不加第四个参数true，多次调用返回同一个资源，加true后，强制重新连接，得到一个新资源。

    mysql_connect('localhost:3307','root','111111');  //指定服务器端口3307

    

    mysqli和PDO也可以连接数据库

    mysqli则是把连接mysql的功能封装成类,是面向对象的写法.

    PDO则是一个统一的数据库接口，什么数据库都可以连接。

    

    $conn = mysql_connect('localhost','root','111111');  //连接数据库

    if(!$conn) {

        echo '连接失败';

        exit;

    }

    

    $sql = 'use test'; // 选择数据库

    

    $rs = mysql_query($sql,$conn); // 沿着conn通道发送sql进行查询。

    

    $sql = 'set names utf8';  //设置utf8类型字符集。

    mysql_query($sql,$conn);

    

    // 增加一条数据

    $id = rand(1,100);

    $sname = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),0,6);

    $sql = "insert into stu values ($id,'$sname','$sname')";

    $rs = mysql_query($sql,$conn);

    if($rs) {

        echo '又多了一个学生';

    } else {

        echo '添加数据失败';

    }

    

    //$id = isset($_GET['id'])?$_GET['id']:0;  接收地址栏的id,传几号id,就删几号会员,容易被注入，数据库很不安全。

    $id = isset($_GET['id'])?$_GET['id']+0:0;// 字符串+0,变成整型了,不会再有注入的功能了.

    $sql = 'delete from stu where id=' . $id; // 形成删除用的sql语句

    // 发送查询

    if(mysql_query($sql,$conn)) {

        echo '删除成功';

    } else {

        echo '删除失败';

    }

    

    

    

    数据库的查看与修改

    

    $sname = addslashes($_POST['sname']); //转义接收表单数据sname

    $yy = addslashes($_POST['yy']);

    $id = $_POST['id'] + 0;   //要接收表单数据id

    $sql = "update stu set sname='" . $sname . "' ,yy= '" . $yy . "' where id=" . $id;  //修改表单数据

    if(mysql_query($sql,$conn)) {

        echo '修改成功';

    } else {

        echo '修改失败';

    }

    

    $sql = 'select * from stu'; //查询数据数据表

    

    mysql_fetch_assoc/row/array/object

    mysql_fetch_assoc($rs); //取出数据表单

    

    $sql = 'select * from stu';

    $rs = mysql_query($sql,$conn);

    while($row = mysql_fetch_assoc($rs)) {  //用while循环取出表单

        $list[] = $row;

    }

    

    mysql_fetch_assoc($rs);  //取出的关联数组，键为字段名，值为字段值。

    mysql_fetch_row($rs);   //取出的索引数组，索引从0到n排列，字符自左到右

    mysql_fetch_array($rs); //取出的结果 既有数字索引,也有字段索引是前2者结果的并集。

    mysql_fetch_object($rs);

    

    $sql = 'delete from stu where id=' . $id; //删除接收ID数据表单。

    

    delete/update语句影响的行数，需要用mysql_affected_rows 来判断。

    $cnt = mysql_affected_rows($conn);  // 删除时真正影响的单元。

    if($cnt) {

        echo '删掉了',$cnt,'行数据';

    } else {

        echo '没有数据被删掉';

    }

    

    echo '<br />';

    

    $sql = 'select * from stu';  // 继承来看,还剩下多少条数据

    $rs = mysql_query($sql,$conn);

    $num = mysql_num_rows($rs); //在运行select 之后,立即调用mysql_num_rows 可以得到这次select的行数

    echo '还剩下',$num,'条数据';

    

    当mysql_query执行失败时,必有原因

    可以用mysql_errno()打印出错误号，返回为数字，不直观。

    mysql_error() 打印出错误信息。

    

    mysql在完成操作后，要及时用mysql_close($conn); 关闭数据库。

    

    

    include/require 都能用来包含文件

    

    include 是包含的意思

    在找不到包含文件时,会报warning, 然后试着往下运行.

    

    require 是必须的意思

    在找不到包含文件时,会报fatal error, 然后不再往下运行

    

    include require的取舍:

    比如,是系统配置,缺少了,网站不让运行,自然用require

    如果,是某一段统计程序,少了对网站只是少统计人数罢了,不是必须要,可以用include

    

    $arr = include('./array.php'); //是利用 include /require返回被包含页面的值

    print_r($arr);

    

    include_once/require_once  //只加载使用一次文件，因增加判断会降低程序效率。

    

    sql的注入与转义

    addslashes 可以某个变量转义。

    

    $arr = array(1,2,3,4);  // 数组小案例

    foreach($arr as $k=>$v) {  //进入数组内操作

        $arr[$k] = 2 * $v;  //数组本身*2

    }

    print_r($arr);

    array_walk_recursive //这是递归处理数组单元的函数

    function abc(&$v,$k) {   //& 地址传值

        $v = addslashes($v);

    }

    array_walk_recursive(&$_GET,'abc');  //递归转义二维数组内变量

    print_r($_GET);

    

    魔术引号magic_quotes_gpc

    在PHP.ini中,magic_quotes_gpc=On; 开启

    用magic_quotes_gpc()来判断魔术引号是否开启。

    

    合理的判断及转义

    if(!get_magic_quotes_gpc()) {  // 如果魔术引号没开

        function _addslashes(&$v,$k) {

            $v = addslashes($v);

        }

        array_walk_recursive(&$_GET,'_addslashes');

        array_walk_recursive(&$_POST,'_addslashes');

        array_walk_recursive(&$_COOKIE,'_addslashes');

    }

    

    php错误级别

    php页面里,用error_reporting()函数来修改

    错误级别用2进制的值来表示的

    1111 1111 1111 111

    从左到右,每位上的1,代表一种错误级别

    fatal error致命错误: 0000 0000 0000 001 开启

    warning 警告错误   : 0000 0000 0000 010 开启

    NOTICE 警告        : 0000 0000 0001 000 开启

    

    系统为我们把各个级别的值,用系统常量代替了.

    E_ERROR 1

    E_WARNING 2

    E_NOTICE 8

    E_ALL   //报所有错误

    

    error_reporting(E_ALL & ~E_NOTICE);  //报除了notice之个的所有错误,即除了NOTICE,其他都报.

    

    在开发中,报错级别高一点，在上线产品中,报错级别要低。

    define('DEBUG',true);  // 在开发时,声明一个DEBUG模式

    if(defined('DEBUG')) { //检测到处于开发模式

        error_reporting(E_ALL);

    } else {

        error_reporting(0);

    }

    

    

    编码分析，乱码解决方法

    

    一个字节8位

    1111 1111

    0000 0000  256种值

    两个字节86位

    0000 0000 0000 0000

    1111 1111 1111 1111

    0-> 65535,6万多种组合

    

    汉字组合来自于

    [129-255][129-255]

    只能组合10000+,事实上,GB2312只能容纳6000多字

    

    GBK的第2低,低位,不再局限于129-255了,<127的也能用，碰到>128的,就再往后找一字节.2字节理解成中文，继续找,找到>128的,就带个家属. ,127的,就单身。

    

    ANSI 代表本地字符集

    在中文操作 GBK

    在日本  JIS

    

    unicode是一个世界通用的码表，用4个字节,来编号

    2^32 ,40多亿, 天文数字. 足够用了 2*（8*4）

    

    unicode与utf-8的关系，就像原文件  --> 压缩文件的关系.

    

    如何截取utf8(各国语言都有),无乱码?

    答: 从头开始,取1个字节.通过位运算,计算连续的1的个数.如为0,则截取1个字节，如为N,则截取N个字节。

    

    从容量上来看 GB2312 < GBK < UTF-8

    GBK 也是和unicode有对应关系的. GBK->unicode->utf-8

    

    乱码是如何形成的?

    utf-8-->转成gb2312,

    容量大    容量小

    丢失了字节?

    

    文件本身的编码与文件内声明的编码一定要一致。

    客户端与服务器之间有连接器conn交接

    clientGBK->转connURF8,connUTF8->不转换存服务器UTF8

    clientGBK->connGBK,connGBK->转UTF8存服务器

    

    set character_set_client=gbk;       客户端

    set character_set_connection=utf8;  连接器

    set character_set_results=gbk;      返回值gbk

    如果存取数据编码不一致也可以存取数据，但会丢失数据。

    所以存储编码原理为：服务器 >= conntion>=client

    client,conn,results都是GBK.可以简单写为 set naems gbk;

    

    bom信息：xp系统下创建utf8文件的时候，前面多了3个字节是用来辨识编码的，这就是bom信息。

    

    session cookie使用前,不能有任何输出,空行空格都不行

    utf8+ 表示前面有bom信息。

    utf8在mysql中小写不加-  其它地方大写UTF-8

    

    问题解决方法总结：

    Warning: Call-time pass-by-reference has been deprecated解决方法

    

    修改php.ini就可以了。

    1. 在PHP.ini中搜索关键字 : allow_call_time_pass_reference 没有的自行建立。

    2. 将 Off 改成 On ,Web Server重起就OK了~

    allow_call_time_pass_reference = Off 变成 allow_call_time_pass_reference = On

    

    Warning: require(D:/wamp/www/tieba/include/config.inc.php)

    路径问题，定义常量时的路径是不会随着文件转移而改变的。

    

    thread  (tid,username,title,content,pubtime)

    reply (rid,tid,username,content,reptime)

    

    create table reply(

    rid int primary key auto_increment,

    tid int(10),

    username varchar(10),

    content varchar(1000),

    reptime int(12)

    )charset utf8;

    

    create table thread(

    tid int primary key auto_increment,

    username varchar(10),

    title varchar(60),

    content varchar(1000),

    pubtime int(12)

    )charset utf8;

    

    

    utf-8中文截取无乱码

    subsrt按字节来取

    substr($str,0,1))  //取每一个字节

    ord(substr($str,0,1)); //把字节变成值

    decbin(ord(substr($str,0,1))); 把值成二进制值

    

    以下操作思路总结还没做、、

    

    $str = '中华人aaaa民共b和国,万c岁';

    

    

    /*

    $str 是待截取的字符串

    $len 是截取的字符数

    */

    

    function utf8sub($str,$len) {

        if($len <= 0) {

            return '';

        }

        $length = strlen($str); //待截取的字符串字节数

        // 先取字符串的第一个字节,substr是按字节来的

        $offset = 0; // 这是截取高位字节时的偏移量

        $chars = 0;  // 这是截取到的字符数

        $res = '';   // 这是截取的字符串

        while($chars < $len && $offset < $length) { //只要还没有截取到$len的长度,就继续进行

            $high = decbin(ord(substr($str,$offset,1))); // 重要突破,已经能够判断高位字节

            if(strlen($high) < 8) {

                // 截取1个字节

                $count = 1;

            } else if(substr($high,0,3) == '110') {

                // 截取2个字节

                $count = 2;

            } else if(substr($high,0,4) == '1110') {

                // 截取3个字节

                $count = 3;

            } else if(substr($high,0,5) == '11110') {

                // 截取4个字节

                $count = 4;

            }  else if(substr($high,0,6) == '111110') {

                // 截取5个字节

                $count = 5;

            }  else if(substr($high,0,7) == '1111110') {

                // 截取6个字节

                $count = 6;

            }       

            // echo $count,'<br />';

            $res .= substr($str,$offset,$count);

            $chars += 1;

            $offset += $count;

        }

        return $res;

    }

    echo utf8sub($str,200);

    /***

    我是用字符串来判断的,效率不高.

    位运算效果会更好.

    110x xxxx & 1110 0000 -> 1100 0000

    1110 xxxx & 1111 0000 -> 1110 0000

    

    mysql引擎学习

    engine引擎就是 mysql存储数据的不同方式

    myisam与innodb两种存储引擎，不同的存储方式，占用的空间不同。

    

    数据库的设计者

    项目经理，架构师，要建设一个高访问量的网站。

    建库，建表的数据库设计，是至关重要的，

    知识：引擎优化，索引优化，表的设计，读写分离

    

    数据库的管理者

    DBA

    知识：权限管理，数据备份，运行监控，性能监测    

    
    面向对象php5中非常重要的一个概念与面向过程一样同是一种编程范式。

    面向过程分支越多就会越难维护复杂，在开发过程中无论多少分支，多少步骤都在讨论范围内的一个确定情况，
    
    并且要做到步步聚到。
    

    面向对象的编程方法，不必局限于固定的流程和步骤。需要先声明类，由类创建对象。类是给对象调用的。

    
    类就是图纸，是抽象的，用来说明产品的共同特点，每个产品都要符合图纸类描述。对象是按图纸类生产出来
    
    的具体对象产品。

    
    类的概念和对象的概念，从程序和数据的角度分析类与对对象。

    

    声明类语法，class 类名 { }

    class wugong {

        public $name = '令狐冲';  //此处为类的属性

        public $gongfu = '独孤九剑';

    

        public function shifu() {

            echo '独孤求败';  //此处为类的方法

        }

    }

    可以理解为方法就是函数，属性就是变量

    

    产生对象语法 new 类名 ( );

    $a = new wugong();

    print_r($a);

    

    $a是一个复合数据，$a->属性名，就可以访问该属性的值

    echo $a->name,'<br />',$a->gongfu,'<br />';

    

    对象调用其方法 

    $a->shifu();

    

    1:关于属性值,可以声明属性并赋值,也可以声明属性先不赋值，如果不赋值,则属性的初始值是NULL

    

    2: 关于PHP中的类,请注意,属性必须是一个"直接的值"，是8种类型任意的"值".

    不能是: 表达式 1+2 的值

    不能是: 函数的返回值 time();

    这点和java不一样.

    

    class Human {

        // public $age = time(); // 错误

        // public $age = 1+2; // 错误

    }

    $a = new Human();

    echo $a->age,'<br />';

    

    

    class People {

        public $age;

    }

    

    $b = new People();

    var_dump($b->age);

    echo '<br />';

    

    PHP中函数是不能重复定义的，系统函数也可不以再次定义，这点和js不一样。

    但类中的方法，指包在类范围内的函数，和普通函数不是一回事，可以和普通函数重名，因为是在类的内部。

    class clock {

        public function time() {

            echo '现在的时间戳是aaaa';

        }

        public function t() {

            return '内部的t';

        }

        public function time2() {

            echo '现在的真正时间戳是',time(),'<br />';  // 注意此处调用的是系统的time()函数

            echo $this->t();   // 注意,此处调用的是自身的t函数;调用内部函数必须加$this以此来区分内部和外部函数。

        }

    }

    

    $c = new clock();

    $c->time();

    echo '<br />';

    $c->time2();

    

    

    构造函数与析构函数

    

    构造函数在创建对象的时候，可利用初始化操作对象，改变对象的值。

    构造函数 __construct();可理解为类中可以传值的一个方法

    构造函数的使用作用时机：当new一个对象时会发挥作用。

    $a = new Human();

    echo $a->name;

    构造函数的传参，并影响对象。传参流程：
        对象(按声明提供参数)->类(方法再把收到的值传给对应的对象)->对象(接收参数)

    class Human {

        public function __construct($name,$gender) {  //构造方法,接收参数，用参数来影响新创建的对象

            $this->name = $name;

            $this->gender = $gender;

        }

    

        public $name = null;

        public $gender = null;

    }

    

    $a = new Human('张飞','男'); //传参给构造方法

    $b = new Human('空姐','女');

    $c = new Human('孙二娘','女');

    $d = new Human();            // 也可以不传参

    

    echo $a->name,'<br />'; // 张飞

    echo $b->name,'<br />'; // 空姐

    echo $c->name,'<br />'; // 孙二娘

    

    析构函数 __destruct()

    构造函数是在对象产生的时候,自动执行

    析构函数是在对象销毁的时候,自动执行

    

    对象如何销毁?

    1:显式的销毁, unset ,赋值为NULL或false/true,都可以

    2:PHP是脚本语言,在代码执行到最后一行时,所有申请的内存都要释放掉.自然,对象的那段内存也要释放,
     对象就被销毁了.对于PHP所做的WEB程序,想犯内存泄露的错误也很难

    

    class Human {
    
        public $name = null;

        public $gender = null;
   
        public function __construct() { //构造函数

            echo '出生了<br />';

        }

    

        public function __destruct() {  //析构函数

            echo '终究没能逆袭!<br />';

        }

    

    }

    

    $a = new Human();

    $b = new Human();

    $c = new Human();

    $d = new Human();

    

    删除、false 、null 操作都可以把对象销毁。

    unset($a);  //$a不是对象，只是一个变量名，unset未必销毁了对象，
                如果还有其它变量引用是不会销毁$a的，当引用为0时对象才销毁。

    $b = false;  //赋值true或false都会销毁对象(此处如果不是对象自己都理解为销毁。)

    $c = NULL;

    

    对象的回收机制

    class Human {

        public $name = '张三';

        public $gender = null;

    

        public function __destruct() {

            echo '死了!<br />';

        }

    }

    $a = new Human();

    $b = $c = $d = $a;

    

    echo $a->name,'<br />';

    echo $b->name,'<br />';

    

    $b->name = '李四';   //修改参数，以证明是用的同一个对象，改一个其它的都改变。

    echo $a->name,'<br />';

    echo $b->name,'<br />';

    

    unset($a);   // $b,$c,$d在指向对象,因此对象不能销毁，执行到最后所有一起销毁，
                    与变量引用有类似的原理。

    

    echo '<hr />';

    

    this的绑定

    

    class Human {

        public $name = 'lisi';

        public function who() {

            echo $this->name;  //此处$this为伪变量，那个对象调用就引用那个对象。

        }

        public function test() {

            echo $name;

        }

    }

    $a = new Human();

    echo $a->name,'<br />'; // lisi

    $a->who();

    

    /*

    和java,c++相比，php方法体内想访问调用者的属性,必须用$this

    如果不加,则理解为方法内部的一个局部变量.

    */

    $a->test();

    

    

    

    面向对象的三大特性：抽象、封装、继承、多态。

    

    封装：把某些重要属性 封装起来,然后通过一个开放的接口来操作.这就实现的对属性的封装.

    class Human {

        private $money = 1000;   // private 私有变量

        public function showMoney() {  //public 公共变量

            return $this->money * 0.8;

        }

    }

    $lisi = new Human();  // 私有变量不被调用，称为封装。

    echo $lisi->showMoney();  // 开放的访问接口

    

    权限修饰符

    作用：用来说明书属性/方法的权限特点，写在属性和方法的前面。

    共有3个权限修饰符

    private 私有的  , 保护的最严

    protected 保护的

    public 公共的    ,保护的最松

    

    判断属性和方法有没权限访问，需要看访问时的位置。

    private的属性/方法,只能在类定义的大括号内{},才能访问

    public 的属性, 在任意位置都可以访问

    

    class Human {

        public $mood = ''; // 心情,公有

        private $money = 1000; // 钱,私有 外部无法调用私有的变量

        public function showMoney() {

            return $this->money;   //内部可以调用私有变量

        }

        private function secret() {  //只能在类的{} 内调用,走出了{}, 谁也调不动.

            echo '我小时候偷吃过一块肉';

        }

        public function tellMe() {

            $this->secret();

        }

    }

    $lisi = new Human();

    

    $lisi->mood = 'happy';

    echo $lisi->mood,'<br />'; // happy;

    echo $lisi->showMoney(),'<br />';  //这一句运行的环境是在 类的{}内部,因此有权限访问 money属性

    $lisi->tellMe();  //通过类内调用的。

    

    看看权限控制的bug

    

    class Human {

        private $money = 1000;

        public function getMoney($people) {

            return $people->money;

        }

        public function setMoney($people) {

            $people->money -= 500;

        }

    }

    

    $zhangsan = new Human();

    $lisi = new Human();

    echo $lisi->getMoney($zhangsan),'<br />'; //lisi可以查看zhangsan的money

    $lisi->setMoney($zhangsan);   //此处lisi可以改zhangsan的money,因是在{}内调用的。

    echo $lisi->getMoney($zhangsan),'<br />';

    

    此处可以访问对象zhangsan是因为php不以对象为单位来控制权限，而是以类为单位来控制权限的。
    
    以类为单位可以简化判断模型。

    

    从代码的写法角度看，应该尽量的来调用对象的方法,而不应该直接把对象当成参数给传过去.

    

    mysql的封装

    可以通过权限修饰符把某些属性封装在类内部，并通过指定的公共接口来访问。
    
    调用者不需要知道封装内部的调用过程。

    

    class Human {

        private $money = 1000;

        private $bank = 2000;

    

        private function getBank($num) {

            $this->bank -= $num;

    

            return $num;

        }

    

        public function send($much) {

            if($much > $this->money + $this->bank) {

                return false;

            } else if($much > $this->money){

                $num = $much - $this->money; //算算要从银行取多少钱?

                $this->money += $this->getBank($num); //从银行取出钱,加到现金里

    

                $this->money -= $much; // 再把钱借给朋友.

                return $much;

            } else { // 直接现金借         

                $this->money -= $much;

                return $much;

            }

        }

    

        public function showMoney() {

            return $this->money;

        }

    

        public function showBank() {

            return $this->bank;

        }

    }

    

    $lisi = new Human();

    

    $m = $lisi->send(300);

    

    if($m) {

        echo '借了',$m,'元<br />';

        echo '还剩下',$lisi->showMoney(),'元<br />';

    }

    

    /// 再借 2000 元

    

    $m = $lisi->send(2000);

    if($m) {

        echo '借了',$m,'元<br />';

        echo '还剩下',$lisi->showMoney(),'元<br />';

        echo '银行还有',$lisi->showBank(),'元,<br />';

    }

    

    

    ====简单MySQL类封装====

    此处为php类的封装操作，思路有些小复杂，要多花些时间看多几次， 里面有着面向对象的运行原理。

    目标:

    连接数据库

    发送查询

    对于select型 返回查询数据

    关闭mysql连接

    

    思路: 首先得连接,连接就得有参数.

    参数如何传?

    答:

    1可以用配置文件,当网站大了,肯定会有配置文件

    2可以通过构造函数传参

    

    建议用1,但我们目前,仅仅是写一个简单类

    class Mysql {

        private $host;

        private $user;

        private $pwd;

        private $dbName;

        private $charset;

        private $conn = null; // 保存连接的资源

        public function __construct() {

            // 应该是在构造方法里,读取配置文件

            // 然后根据配置文件来设置私有属性

            // 此处还没有配置文件,就直接赋值

            $this->host = 'localhost';

            $this->user = 'root';

            $this->pwd = '111111';

            $this->dbName = 'test';

            // 连接

            $this->connect($this->host,$this->user,$this->pwd);

            // 切换库

            $this->switchDb($this->dbName);

            // 设置字符集

            $this->setChar($this->charset);

        }

        // 负责连接

        private function connect($h,$u,$p) {

            $conn = mysql_connect($h,$u,$p);

            $this->conn = $conn;

        }

        // 负责切换数据库,网站大的时候,可能用到不止一个库

        public function switchDb($db) {

            $sql = 'use ' . $db;

            $this->query($sql);

        }

        // 负责设置字符集

        public function setChar($char) {

            $sql = 'set names ' .  $char;

            $this->query($sql);

        }

        // 负责发送sql查询

        public function query($sql) {

            return mysql_query($sql,$this->conn);

        }

    

        // 负责获取多行多列的select 结果

        public function getAll($sql) {

            $list = array();

            $rs = $this->query($sql);

            if(!$rs) {

                return false;

            }

            while($row = mysql_fetch_assoc($rs)) {

                $list[] = $row;

            }

            return $list;

        }

        // 获取一行的select 结果

        public function getRow($sql) {

            $rs = $this->query($sql);

            if(!$rs) {

                return false;

            }

            return mysql_fetch_assoc($rs);

        }

        // 获取一个单个的值

        public function getOne($sql) {

            $rs = $this->query($sql);

            if(!$rs) {

                return false;

            }

            $row = mysql_fetch_row($rs);

            return $row[0];

        }

        public function close() {

            mysql_close($this->conn);

        }

    }

    

    echo '<pre>';

    $mysql = new Mysql();

    print_r($mysql);

    

    $sql = "insert into stu values (20,'object','99988')";

    if($mysql->query($sql)) {

        echo 'query成功';

    } else {

        echo '失败';

    }

    echo '<br />';

    

    $sql = 'select * from stu';

    $arr = $mysql->getAll($sql);

    

    print_r($arr);

    

    // 查询16号学员

    $sql = 'select * from stu where id=16';

    print_r($mysql->getRow($sql));

    

    // 查询共有多少个学生

    $sql = 'select count(*) from stu';

    print_r($mysql->getOne($sql));

    

    ===简单的mysql封装类,完成.===

    

    改进:

    insert update操作,都需要大量拼接字符串.

    

    能否给定一个数组,数组键->列 ,数组值->列的值

    

    然后自动生成 insert 语句!

    

    

    继承：是指以一个类为父类，另一个类可以做为其子类。子类在继承父类的基础上进一步增添或修改。

    语法: extends

    子类 extends 父类 {

    }

    

    class Human {

        private $wife = '小甜甜';

    

        public function cry() {

            echo '5555<br />';

        }

        public function pshow() {

            echo $this->wife,'<br />';

        }

    }

    class Stu extends Human{

        private $wife = '凤姐';  //子类增加属性

        public function subtell() {

            echo $this->wife;

        }

        public function sshow() {

            parent::pshow(); //调用父类属性，执行是在父类中执行的。

            echo $this->wife,'<br />';

        }

    }

    

    $lisi =  new Stu();

    $lisi->cry(); //此处为继承父类可成功调用

    $lisi->laugh();  //此处无父类继承调用失败

    $lisi->subtell();//私有属性不能继承。

    $lisi->sshow();

    

    public protected 都可以继承进行访问和修改，private其实也能继承，不过无法访问。

    对于子类继承父类的protected/public属性和方法，

    1、父类有的子类继承，父类有的子类可以更改，父类没有的子类可以添加。

    

    继承时的权限变化。

    class Human {

        public function cry() {

            echo '555<br />';

        }

    }

    class Stu extends Human{

        protected function cry() {  //子类继承父类后权限只有越来越宽松。

            echo '5959<br />';

        }

    }

    

    构造方法的继承

    答: 构造方法也是可以继承的,而且继承的原则和普通方法一样.

    进而,如果子类也声明构造函数,则父类的构造函数,被覆盖了!

    如果父类构造函数被覆盖了,自然,只执行子类中新的构造函数.

    

    如果是一个数据库操作类，或者model类，子类继承model类后，子类也有同样构造函数，导致初始化失败。
    所以继承model类时，子类有构造函数，保险一点调用 parent::__construct

    

    class Mysql {

        protected $conn = NULL;

        public function __construct() {

            $this->conn = mysql_connect('localhost','root','111111');

        }

        public function query($sql) {

            return mysql_query($sql,$this->conn);

        }

    }

    /*

    $mysql = new Mysql();

    var_dump($mysql->query('use test')); // true,query成功

    */

    class MyDb extends Mysql{

        public function __construct() {  //子类覆盖修改父类的构造函数，

            parent::__construct();   //如果子类继承时,有相同构造函数,保险一点

        }

    

        public function autoInsert() {

            return $this->query('use test');

        }

    }

    

    $mydb = new MyDb();  // 看看问题出在哪儿?

    var_dump($mydb->autoInsert());

    

    权限控制符private  protected  public 三者的区别

            private     protected       public

    本类内     Y           Y              Y

    子类内     N           Y              Y

    外部       N           N              Y

    public 可以在类外调用,权限最为宽松,protected和 private不能在类外调用

    如果public/protected/private 都不写,则理解为 public 建议养成好习惯,不要不写

    

    面向对象之多态

    

    在强类型语言java中，函数参数，函数的返回值，都是定死的，没有多态的概念。

    如果类的参数声明了为红色，如果传参数为蓝色就不行，因有类型检测这一关。java  c++在编译时要检测，
    
    一个变量/参数声明是什么类型的，就必须传什么类型的。

    所以在声明参数时，声明为父类型，传参时，传其子类型，传不同的子类来实现多态。

    

    在弱类型语言php中，一个变量没有类型，你装什么变量都行，参数也什么类型都行。非常灵活。

    开始程序的里氏代换: 原能用父类的场合,都可以用子类来代替.

    只抽象的声明父类, 具体的工作由子类对象来完成，这样,不同的子类对象完成,有不同的特点.

    class Light {

        // 此处,仿java,也加一个类名,做参数类型检测

        public function ons(int $g) { 

            // 用玻璃渲染颜色

            $g->display();

        }

    }

    class Glass { //对类型做一定的限制

        public function display() {

        }

    }

    class RedGlass extends Glass{

        public function display() {

            echo '红光照耀<br />';

        }

    }

    class BlueGlass extends Glass {

        public function display() {

            echo '蓝光照耀<br />';

        }

    }

    class GreenGlass extends Glass {

        public function display() {

            echo '绿光照耀<br />';

        }

    }

    class Pig {

        public function display() {

            echo '八戒下凡,哼哼坠地!<br />';

        }

    }

    

    // 造手电筒

    $light = new Light();

    // 造红玻璃

    $red = new RedGlass();

    // 造蓝玻璃

    $blue = new BlueGlass();

    // 红灯亮

    $light->ons($red);

    // 蓝灯亮

    $light->ons($blue);

    

    // 猪八戒降生

    $pig = new Pig();

    $light->ons($pig);

    

    但是PHP5.3以后,引入了对于对象类型的参数检测,

    注意 只能检测对象所属的类

    其实,这对于PHP来说,限制了其灵活性,达到的java中多态的效果.

    

    静态属性，静态方法

    当对象有同样的属性方法时，可以只写一个属性和方法，静态属性放到类声明中的，为所有对象共享。
    
    静态属性的访问不依赖于对象。

    静态对象的参数是唯一的，只能有一个，如果修改其它对象都会受影响改变。

    在属性与方法前加 static 修饰，即称为静态属性/静态方法。

    class Human {

        static public $head = 1;  //在属性前加 static

    

        public function changeHead() {

            Human::$head = 9;

        }

    

        public function getHead() {

            return Human::$head;

        }

    }

    

    echo Human::$head,'<br />'; //静态属性没有对象，可以用类名访问

    $m1 = new Human();

    $m1->changeHead(); // 修改静态属性的参数，其它对象也受影响变化。

    

    $m2 = new Human();

    $m3 = new Human();

    

    echo $m2->getHead(),'<br />'; // 9

    echo $m3->getHead(),'<br />'; // 9

    

    

    静态方法

    静态方法与普通方法一样存于类内只有一份，区别在于普通对象必须对象去调用，需要绑定$this  。
    
    而静态方法不属于那个对象，因此不需要绑定$this ,通过类名即可访问。

    class Human {

        public $name = '张三';

        static public function cry() {

            echo '5555';

        }

        public function eat() {

            echo '吃饭';

        }

        public function intro() {

            echo $this->name;

        }

    }

    Human::cry();  //类名访问静态方法

    

    $lisi = new Human();

    $lisi->cry(); //对象访问静态方法。

    

    访问静态方法的总结

    类->访问->静态方法 可以

    类->动态方法  方法内没有this的情况下,但严重不支持.逻辑上解释不通.

    

    对象-->访问动态方法  可以

    对象-->静态方法     可以

    

    

    self / parent的用法

    self: 本类； parent: 父类

    

    在引入自身的静态属性/静态方法，以及父类的方法时,可以用到.

    

    用法:

    self::$staticProperty

    self::staticMothed;

    parent::$staticProperty

    parent::Mothed;

    

    class cHuman {

        static public $head = 1;

        public function say() {

        //echo Human::$head,'<br />'; //此处如果类名修改调用会出错

            echo self::$head,'<br />';  //用self 可以解决类名变化，调用出错的问题。

        }

    }

    echo cHuman::$head,'<br />'; // 1

    $lisi = new cHuman();

    $lisi->say(); //

    

    class Stu extends cHuman {

        static public $head = 2;

    

        public function say() {

            echo self::$head,'<br />';  //子类怎么改名，对象调用方法都不会出错。

            echo '父类只有',parent::$head,'<br />'; //父类怎么改名，对象调用方法都不会出错。

    

    例子用$this还是用 parent学习

    class a{

        public function a1(){

        echo 'this is class function a1()';

        }

    

    }

    class b extends a{

        public function b1(){

            $this->a1(); //继承后在子类内找，更符合面向对象的思维。

        }

        public function b2(){

            parent::a1();  //parent直接到父类找，速度要快。

        }

    }

    

    $b = new b();

    $b->b1();

    $b->b2();

    

    $this与parent显示效果一样的，$this继承了父类，应该在子类中查找，

    如果是多级继承到父类中查找不合理，若是私有属性可以用parent查找

        }    

    }

    

    $ming = new Stu();

    $ming->say();

    

    单例模式

    多人协同开发，都要调用mysql类的实例

    如果用svn知道，多人一起开发，再提交各自文件。

    

    主要思路:

    1:保护或私有构造函数,防止外部实例化

    2:内部开放一个公共的静态方法,负责实例化

    3:类有一个静态属性存放对象.

    

    当静态属性已经存放对象,直接return 该对象.

    

    单例在继承后就不是单例了,需要用到final来修饰方法解决。

    final 最终的

    final 在PHP中,可以修饰类,方法名,但不能修饰属性

    final 修饰类,则此类 不能够被继承

    final 修饰方法,此方法不影响继承,但是此方法 不允许重写

    在java中,final也可以修改属性,此时属性值,就是一个常量,不可修改.

    

    class s {

        public $hash; //随机码

    

        static protected $ins = NULL;

    

        final  protected function __construct() {

            $this->hash = mt_rand(1,99999);

        }

    

        static public function getInstance() {

            if(self::$ins instanceof self) {  // instance实例 of谁的,

                                                //专门判断某个对象是不是某个类的实例 用的

                return self::$ins;

            }

        

            self::$ins = new self();

            return self::$ins;

        }

    

    }

    

    

    class t extends s {

        

    }

    

    $t1 = t::getInstance();

    $t2 = t::getInstance();

    

    print_r($t1);

    print_r($t2);

    

    $t3 = clone $t2;

    

    if($t1 === $t2) {

        echo '是一个对象<br />';

    } else {

        echo '不是一个对象<br />';

    }

    单例模式：new多少个对象，都是完全相等的。应用于多人开发时new的对象不相等的问题。

    

    

    魔术方法:

    是指某些情况下,会自动调用的方法,称为魔术方法

    PHP面向对象中,提供了这几个魔术方法,都是以双下划线__开头的

    __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state() 和 __clone()

    

    __clone(); 克隆方法,当对象被克隆时,将会自动调用方法。

    

    __get(); 当对象调用不可调用或不存在属性时，会自动传参，参数值就是属性名。

    当对象调用出错时，系统会直接报错,甚至fatal error；通过__get,我们就能自定义用户访问时,的处理行为，参与报错的处理。

    

    对象就是一个属性集，可以随便加属性，属性过多就会不好管理。

    __set($a,$b); 可以限制无权操作的属性贬值或不存在的属性赋值行为。public公开的属性和方法的操作不受影响。

    class Stu {

        private $money = '30两';

        protected $age = 23;

        public $name = 'Hmm';   

    

        public function __set($a,$b) {

            echo '你想设置我的',$a,'属性','<br />';

            echo '且值是',$b,'<br />';

        }

    }

    

    echo '<hr />';

    $hmm = new Stu();

    

    $hmm->aaa = 111;

    $hmm->money = '40两';

    $hmm->age = '28';

    print_r($hmm);

    

    $hmm->name = 'HanMM';

    print_r($hmm);

    

    __isset()方法

    当用isset() 判断对象不可见的属性时(protected/private/不存在的属性)会引发 __isset()来执行

    __unset()方法

    当用unset 销毁对象的不可见属性时或限制属性时,会引发 __unset();

    class Dog {

        public $leg = 4;

        protected $bone = '猪腿骨';

    

        public function __isset($p) {

            echo '你想判断我的',$p,'属性存不存在<br />';

    

            return 1;

        }

    

        public function __unset($p) {

            echo '你想去掉我的',$p,'?!<br />';

        }

    }

    

    $hua = new Dog();

    

    if(isset($hua->leg)) {

        echo $hua->leg;

    }

    

    if(isset($hua->tail)) {

        echo '有tail属性'; //此处会返回为真,前面有return值为1；

    } else {

        echo '没有tail';

    }

    /*

    问: isset($obj->xyz) 属性,为真,

    能说明  类声明了一个xyz属性吗?

    答:不能

    */

    

    echo '<hr />';

    echo '__unset测试';

    print_r($hua);

    unset($hua->leg);

    print_r($hua);

    

    unset($hua->tail);

    unset($hua->bone);

    

    __call是调用不可见(不存在或无权限)的方法时,会引发__call执行。

    __callStatic 是调用不可见的静态方法时，会引发__callstatic执行。

    class Human {

        public function hello() {

            echo 'hello<br />';

        }

    

        private function t() {

        }

    

        public static function __callStatic($method,$argu) {

            echo '你想调用一个不存在或不权调用的静态方法',$method,'<br />';

            echo '你调用时还传了参数<br />';

            print_r($argu);

        }

    

        public function __call($method,$argu) {

            echo '你想调用一个我不存在或不权调用的方法',$method,'<br />';

            echo '你调用时还传了参数<br />';

            print_r($argu);

        }

    

    }

    

    $lisi = new Human();

    

    $lisi->hello();

    $lisi->say(1,2,3);

    

    $lisi->t('a','b','c');

    Human::cry('痛哭','号哭','鬼哭');

    

    

    重写/覆盖  override

    指:子类重写了父类的同名方法

    

    重载: overload

    重载是指:存在多个同名方法,但参数类型/个数不同，传不同的参数,调用不同的方法。

    但是在PHP中,不允许存在多个同名方法，因此,不能够完成java,c++中的这种重载。

    class Calc {

        public function area() {    

            $args = func_get_args(); // 判断一个调用area时,得到的参数个数

            if(count($args) == 1) {

                return 3.14 * $args[0] * $args[0];

            } else if(count($args) == 2) {

                return $args[0] * $args[1];

            } else {

                return '未知图形';

            }

        }

    }

    

    $calc = new Calc();

    // 计算圆的页面

    echo $calc->area(10),'<br />';

    // 计算矩形的面积

    echo $calc->area(5,8);

    
    普通常量   define('常量名',常量值);

    define定义的常量 ,全局有效,无论是页面内,函数内,类内,都可以访问。

    

    类常量    const 声明

    权限是public的，外部也可以访问，具有不可改变的特性，其实就是不可改变的静态属性。

    define('ACC','Deny');

    class Human {

        const HEAD = 1;

        public static $leg = 2;

        public static function show() {

            echo ACC,'<br />';

            echo self::HEAD,'<br />';

            echo self::$leg,'<br />';

        }

    }

    

    Human::show();

    echo Human::HEAD;

        

    魔术常量

    1:无法手动修改他的值,所以叫常量

    2:但是值又是随环境变动的,所以叫魔术

    ---魔术常量

    __FILE__  返回当前文件的路径.

    在框架开发或者是网站初始化脚本中,用来计算网站的根目录

    __LINE__  返回当前的行号

    在框架中,可以用来在debug时,记录错误信息

    __CLASS__ 返回当前的类名

    __METHOD__ 返回当前的方法名

    

    

    

    抽象类: 无法实例化

    类前加 abstract, 此类就成为抽象类,无法new来实例化，继承后可以new.

  ----------------------------------看到这里-----------------------------  

    类前加 abstract 是抽象类，方法前加 abstract 是抽象方法

    抽象类 不能 实例化，抽象方法 不能有 方法体

    有抽象方法,则此类必是抽象类，抽象类,内未必有抽象方法

    abstract class Welcome {

        public abstract function wel();

    }

    class china extends Welcome {

        public function wel() {

            echo '你好,非死不可,<br />';

        }

    }

    class english extends Welcome {

        public function wel() {

            echo 'hi,welcome';

        }

    }

    class japan extends Welcome {

        public function wel() {

            echo '搜达斯奈';

        }

    }

    从开发者看，子类都继承同一个抽象父类，子类的规格必和抽象父类一致，
    
    所以不用关心是那个子类，便于添加子类（添加优于修改）。

    $c = 'english'; // china, japan

    $wel = new $c(); 

    $wel->wel();

    

    

    后期绑定/延迟绑定

    是指类的计算self的定义不是以定义时为准,而是以运行时的计算结果为准.

    

    class Human {

        public static function whoami() {

            echo '来自父类的whoami在执行<br />';

        }

        public static function say() {

            self::whoami(); // 子类内没有say方法,找到了父类这里

                            // 在这里的self 指的是 父类

        }

    

        public static function say2() {

            static::whoami();    //  子类也没有say2方法,又找到父类这里

                                // 但是父类用static::whoami,

                                // 指调用你子类自己的whoami方法

        }

    }

    class Stu extends Human{

        /*

        public static function whoami () {

            echo '来自子类的whoami在执行<br />';

        }  如果子类没有则继续找回父类。

        */

    }

    

    Stu::say();

    Stu::say2();

    

    延迟绑定:

    class Animal {

        const age = 1;

        public static $leg = 4;

        public static function cry() {

            echo '呜呜<br />';

        }

        public static function t1() {

            self::cry();

            echo self::age,'<br />';

            echo self::$leg,'<br />';

        }

        public static function t2() {

            static::cry();

            echo static::age,'<br />';

            echo static::$leg,'<br />';

        }

    

    }

    class Human extends Animal {

        public static $leg = 2;

    

        public static function cry() {

            echo '哇哇<br />';

        }

    }

    class Stu extends Human {

        const age = 16;

        public static function cry() {

            echo '嘤嘤<br />';

        }

    }

    Stu::t1(); //呜呜,1,4

    Stu::t2(); // 嘤嘤,16,2

    

    接口：

    类: 是某一类事物的抽象,是某类对象的蓝图。

    类如果是一种事物/动物的抽象，接口,则是事物/动物的功能的抽象,即,再把他们的功能各拆成小块，
    
    自由组合成新的特种。

    interface animal {

        public function eat();

    }

    

    interface monkey {

        public function run();

        public function cry();

    }

    

    interface wisdom {

        public function think();

    }

    

    interface bird {

        public function fly();

    }

    

    class BirdMan implements animal,monkey,wisdom,bird{

        public function eat() {

            echo '吃';

        }

        public function run() {

            echo '走';

        }

        public function cry() {

            echo '哭';

        }

        public function think() {

            echo '思考';

        }

        public function fly() {  //增加一个飞的接口

            echo 'hi,我是天使,但大家都叫我鸟人';

        }

    }

    

    $birdli = new BirdMan();

    $birdli->fly();

    

    1: 如上,接口本身即是抽象的,内部声明的方法 默认也是抽象的，不用加 abstract

    2: 一个类可以一次性实现多个接口.

    语法用 implements 实现 (把我这几个功能实现了)

    class ClassName implements interface1,interface2,interface3 {

    }

    然后再把接口的功能给实现.

    3: 接口也可以继承, 用extends

    4:接口是一堆方法的说明,不能加属性

    5:接口就是供组装成类用的,封闭起来没有意义,因此方法只能是public

    

    抽象类{就定义类模板}--具体子类实现，便于更换便于更新模块

    

    db抽象类

    这个mysql类,严格实现了db抽象类

    abstract class db {

        public abstract function connect($h,$u,$p);

        public abstract function query($sql);

        public abstract function close();

    }

    开发时,调用方法不清楚的地方,我就可以参考db抽象类，反正子类都是严格实现的抽象类。

    class mysql extends db {

        public function connect($h,$h,$u) {

            return true;

        }

        public function query($sql) {

        }

        public function close() {

        }

    }

    

    在网站开发中的核心应用时，可把众多的方法分成类，写在不同类中。

    interface UserBase {

        public function login($u,$p);

        public function logout();

    }

    interface UserMsg {

        public function wirteMsg($to,$title,$content);

        public function readMsg($from,$title);

    }

    interface UserFun {

        public function spit($to);

        public function showLove($to);

    }

    

    下面这个类,和接口声明的参数不一样,就报错,这样,接口强制统一了类的功能，不管你有几个类,
    
    一个类中有几个方法，只要知道,方法都是实现的接口的方法.

    

    这两个类都要实现 上述接口，通过这个接口,就可以规范开发.

    

    class User implements UserBase {

        public function login($u) {

        }

    }

    在开发网站时，程序员参考接口的方法开发，项目经理只需提供一个抽象类和提供接口。

    

    

    类的自动加载

    __autoload(); 在调用某个不存在的类，在报错之前，系统会把类名自动传给__autoload函数，
    
    所以我们自然可以在__autoload里 加载需要的类!

    function __autoload($c) {

        require('./' . $c . '.php');

    }

    $lisi = new HumanModel();

    $lisi->t();

    

    自动加载的另一种用法

    其实也可以指定一个函数名，用系统函数 spl_auto_register 告诉系统

    spl_autoload_register('zidongjiazai');

    

    手动加载与自动加载

    requier相当于把被引用的文件完全拿过来，如果类多调用会比较乱

    __autoload只需要调用函数，直接调用方法就行。

    function test() {

        // 函数内可以写任何合法的PHP代码,包含再声明一个函数/类

        class Bird {

            public static function sing() {

                echo '百灵鸟儿放声唱!';

            }

        }

    }

    // Bird::sing();   // Class 'Bird' not found

    没有调用函数，函数要调用才能执行。也就是外层函数没执行，内层函数不会存在。

    texst();

    Bird::sing();

    

    

    异常

    函数无论进去多少参数，最后只能是一个返回值，容易判断。

    对象内属性和方法比较多很难做出判断，所以异常可以在对象制造的过程中进行检测，处理更即时。

    class mysql {

        protected $conn = NULL;

    

        public function __construct() {

            $this->conn = mysql_connect('localhost','root','1111111');

    

            if(!$this->conn) {

                // 发报错用的，类的对象: Exception类的对象

                //实例new对象，new Exception('错误原因',错误代码);

                $e = new Exception('漏油了',9);

                throw $e;  // throw 抛出/扔出

            }

        }

    }

    try { // 测试,并试图捕捉错误信息

        $mysql = new mysql(); // 返回mysql对象,并且自动连上了数据库

    } catch(Exception $e) {

        echo '捕捉到错误信息:<br />';

        echo $e->getMessage(),'<br />';

        echo '错误代码',$e->getCode(),'<br />';

        echo '错误文件',$e->getFile(),'<br />';

        echo '错误行',$e->getLine(),'<br />';

    }

    思路总结，throw(提供错误信息)->try(捕捉错误信息)

    

    var_dump($mysql);

    if($mysql instanceof mysql) {

        echo '对象创建成功,大概连接成功';

    } else {

        echo '对象创建失败,大概连接失败';

    }

    

    

    文件内容的读取与写入

    

    file_get_contents()可以获取一个文件的内容或一个网络资源的内容。是一个比较快捷的函数，
    
    一次性把文件的内容全部打开/关闭等操作，对于上百M的文件慎用些函数。

    file_get_contents 要获取的文件不存在,为报warning

    

    file_put_contents() 可以把内容写入到文件一次执行打开写入关闭的细节。

    file_put_contents如果指定的文件不存在,则会自动创建

    

    $file = './a.txt';

    $str = file_get_contents($file);

    file_put_contents('./b.txt',$str);

    

    fopen()  打开一个文件，返回一个句柄资源

    $file = '163news.html';

    $fh = fopen($file,'r');  //此处模式分为多种， r只读/r+读写并把指针指向文件头，
    
    从文件头,写入时,覆盖相等字节的字符.。

    

    echo fread($fh,10),'<br />';  // 沿着上面返回的$fh这个资源通道来读文件。

    

    var_dump(fwrite($fh,'我来了!!!!!!!')); //返回int(0),说明没有成功写入

    如果打开模式为只读，在这里是无法写入的

    

    $fh = fopen('modea.txt','a');  //追加模式打开,能写,并把指针停在文件的最后

    echo fwrite($fh,'白云一片')?'OK modea':'fail';

    fclose($fh); // 关闭资源

    

    

    各操作系统下,换行符并不一致

    win: \r\n

    linux: \n

    mac: \r

    

    循环读取内容

    $fh = fopen($file,'rb');

    while(!feof($fh)) {    //feof ,end of file的意思专门用来判断指针是否已经走到结尾

        echo fgets($fh),'<br />';  //fgets一次读一行

    }

    

    file函数,直接读取文件内容,并按行拆成数组,返回该数组

    $arr = file($file);

    print_r($arr);

    file与file_get_contents的相同之处:一次性读入,大文件慎用!

    

    文件是否存在，创建时间和修改时间。

    $file = 'custom.txt';

    if(file_exists($file)) {    //判断文件是否存在

        echo $file,'存在<br />';

        echo '上次修改时间是',date('Y-m-d H:i:s',filemtime($file));  //修改文件的时间

    } else {

        echo '不存在 ';

    }

    

    如何把excel文件导入到数据库

    1:excel并不是开放的标准,是微软自己的,你只能猜测他的格式，
    
    标准还有可能变(目前国际上已经制定的标准文档规范)，操作excel ,有开源的phpExcel开源的类.

    2:如果是简单的想导入数据库,可以先转换化csv文件，csv是一种简单的用逗号隔开的文件格式。
    
    xml为计算机世界通用语言。

    

    把excel导入数据库的方法，excel->csv->文件处理

    $file = 'score.csv';

    $fh = fopen($file,'rb');

    while(!feof($fh)) {

        $row = fgetcsv($fh); //封装了csv文件的相关规范，可以准确读出文件内容。

        print_r($row);

    }

    

    删除文件方法或文件中的内容

    foreach(array('a.txt','b.txt','c.txt','d.txt') as $v) {

        $file = './article/' . $v;

        if(filesize($file) < 10) {  // 判断大小

            unlink($file);  //删除文件

            echo $file,'小于10字节被删了<br />';

            continue;  // 下一个文件

        }

        $cont = file_get_contents($file); //读取内容

        if(stripos($cont,'fuck') !== false) {  // 大于10字节,就判断内容

            unlink($file);

            echo $file,'有文明用语,被删了<br />';

        }

    }

    

    print_r(glob('./article/*.txt'));  // 匹配文件,把txt后缀的文件找出来,返回数组

    

    

    目录操作

    opendir  打开目录

    readdir 读取目录

    mkdir 创建目录

    rmdir 删除目录

    closedir 关闭目录句柄

    is_dir 判断是否为目录

    

    读出文件中的所有文件

    $path = './misc';

    $dh = opendir($path); //opendir 打开目录,返回资源句柄

    while(($filename = readdir($dh)) !== false) {  //如果读到文件，不为false继续读取

        echo $filename;

        if(is_dir('./misc/' . $filename)) {  //判断是否为目录。

            echo '是目录';

        }

    

        echo '<br />';

    }

    closedir($dh);

    

    创建目录

    foreach(array('a','b','c','d') as $v) {

        $path = './misc/' . $v;

        if(file_exists($path) && is_dir($path)) {

            echo $path,'已经存在<br />';

            continue;

        }

        if(mkdir($path)) {

            echo $path,'创建成功';

        } else {

            echo $path,'创建失败';

        }

        echo '<br />';

    }

    

    删除目录rmdir只能删非空目录.

    foreach(array('a','c','e') as $v) {

        $path = './misc/' . $v;

    

        if(file_exists($path) && is_dir($path)) {

            if(rmdir($path)) {

                echo $path,'删除成功<br />';

            } else {

                echo $path,'删除失败<br />';

            }

        } else {

            echo $path,'目录不存在<br />';

        }

    }

    


    递归打印级联目录
<?php
   function recdir($path) {

        $dh = opendir($path);

        while(($row = readdir($dh)) !== false) {

            if($row == '.' || $row == '..') {

                continue;

            }

            echo $row,'<br />';

            // 如果$row