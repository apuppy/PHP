<?php

    /*
     * 变量引用
     */
    $a = "ABC";
    $b = &$a;
    echo $a."|".$b;
    $a = '234';
    echo "\n";
    echo $a."|".$b;
    echo "\n";

    //引用传递加&符号
    function add2(&$var){
        $var+=2;
    }
    $var = 3;
    add2($var);
    var_dump($var);

    /*
     * 匿名函数中的引用
     */
    $num = 2;
    $fun = function() use ($num){
        echo $num."|";
    };

    //使用引用 &
    $funNew = function() use (&$num){
        echo $num."\n";
    };
    $fun();
    $funNew();

    $num = 6;
    $fun();
    $funNew();

?>