<?php
require_once('./config/mysql.php');
class mysql{
    //mysql连接资源
    public $link;

    //初始化
    public function __construct(){
        $this->link = mysqli_connect($mysql['ip'],$mysql['user'],$mysql['password']);
    }

    //todo

    //析构方法里关闭mysql连接
    public function __destruct(){
        mysqli_close($this->link);
    }

}

$mysql = new mysql();