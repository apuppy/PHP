<?php
    //chapter No1
    $text = "This year is 2015 \n";
    $text .= "Next year is 2016 \n";

    $new_text = preg_replace_callback('|(\d{4})|',function($match){
        return $match[1]+1;
    },$text);

    echo $text."\n";
    echo $new_text;


    //chapter No2 匿名函数赋值到变量
    $greet = function ($name) {
        printf("Hello , %s.\n",$name);
    };
    $greet("World");
    $greet("PHP");


    //chapter No3 从上级作用域继承变量，结合use，需要时用上引用&
    $No = 3;
    $add = function() use ($No) {
        echo $No += 3;
        echo "\n";
    };
    $add();
    $add();

    $No = 5;
    $add_new = function () use(&$No) {
        echo $No += 3;
        echo "\n";
    };

    $add_new();
    $add_new();