<?php
    /**
     * @param mixed 要打印的变量名
     * @param boolean 是否调用exit阻止向下执行的标志
     */
    function vd($var,$exitFlag = true){
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
    function vp($var,$exitFlag = true){
        echo '<pre>';
        print_r($var);
        echo '</pre>';

        if(isset($exitFlag) && $exitFlag == true){
            exit();
        }
    }