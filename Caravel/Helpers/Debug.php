<?php
namespace Helpers;
/**
 * Date: 2015/11/27
 * Time: 16:14
 * Debug class
 */
class Debug{

    /**
     * @param mixed 要打印的变量名
     * @param boolean 是否调用exit阻止向下执行的标志
     */
    public function vd($var,$exitFlag = true){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';

        if(isset($exitFlag) && $exitFlag == true){
            exit();
        }
    }

    /**
     * @param mixed 要打印的变量名
     * @param boolean 是否调用exit阻止向下执行的标志
     */
    public function vp($var,$exitFlag = true){
        echo '<pre>';
        print_r($var);
        echo '</pre>';

        if(isset($exitFlag) && $exitFlag == true){
            exit();
        }
    }

    //TODO var_export 输出或返回一个变量的字符串表示
}