<?php
abstract class Route{
    public static function add(){
        return true;
    }
    abstract public function to();
}

class ServerRoute extends Route{
    public static function add()
    {
        return 1 === '1' ? true : false ;
    }
    public function to(){

    }
}

$boolean = ServerRoute::add();
//var_dump($boolean);

echo(strlen('0cc175b9c0f1b6a831c399e269772661'));