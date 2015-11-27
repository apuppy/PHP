<?php

/**
 * Date: 2015/11/27
 * Time: 15:05
 */
class RSA
{
    //调用url
    const url = '';

    //密钥文件位置
    const cipherFile = '/opt/cipher/test.pfx';

    /**
     *
     * @function 构造方法，初始化相应参数
     *
     */
    private function __construct(){
        //Todo
    }

    /**
     *
     * @function 读取公钥
     *
     */
    protected function getPublicKey(){

    }

    /**
     *
     * @function 获取私钥
     *
     */
    protected function getPirvateKey(){

    }

    /**
     *
     * @function 解密
     * @param string $data 要解密的数据
     * @return mixed 解密后的数据
     *
     */
    public function decrypt($data){

    }

    /**
     *
     * @function 加密
     * @param mixed $data 要加密的数据
     * @return string 加密后的字符
     *
     */
    public function encrypt($data){

    }
}