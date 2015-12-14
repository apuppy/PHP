<?php

/**
 * Date: 2015/11/27
 * Time: 15:40
 * HTTP请求类，利用curl扩展，实现数据组装，url请求，返回响应
 */

class HttpRequest{

    /**
     * @function 初始化
     * @return void
     */
    protected function __construct(){

    }

    /**
     * @function 准备数据
     * @param array 准备要发送的参数
     * @return void
     */
    public function prepareData($data){

    }

    /**
     * @function 发起url请求
     */
    public function request(){

    }

    /**
     * @function 获取响应
     * @return mixed 返回请求后的响应
     */
    public function getResponse(){

    }

    /**
     * @function GC
     */
    protected function __destruct(){
        //TODO:关闭curl资源
    }

}