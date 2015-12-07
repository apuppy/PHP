<?php

/**
 * Date: 2015/11/27
 * Time: 16:14
 * 公共帮助类
 */

    /**
     * @function
     * @param mixed 要打印的变量名
     * @param boolean 是否调用exit阻止向下执行的标志
     */
if(!function_exists('vd')){
    function vd($var,$exitFlag = true){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';

        if(isset($exitFlag) && $exitFlag == true){
            exit();
        }
    }
}

    /**
     * @function
     * @param mixed 要打印的变量名
     * @param boolean 是否调用exit阻止向下执行的标志
     */
if(!function_exists('vd')){
    function vp($var,$exitFlag = true){
        echo '<pre>';
        print_r($var);
        echo '</pre>';

        if(isset($exitFlag) && $exitFlag == true){
            exit();
        }
    }
}

    //TODO var_export 输出或返回一个变量的字符串表示