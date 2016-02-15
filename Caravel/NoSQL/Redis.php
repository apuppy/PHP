<?php
/**
 * Redis
 */
class PhpRedis
{
    /**
     * redis client
     *
     * @var
     */
    protected $client;

    public function __construct()
    {
        return $this->connectRedisServer();
    }

    /**
     * connect redis server
     *
     * @return Redis
     */
    protected function connectRedisServer(){
        $this->client = new Redis();
        $this->client->connect('localhost',6379);
        return $this->client;
    }

    /**
     * execute Redis command
     *
     * @param $method
     * @param array $parameters
     * @return mixed
     */
    public function command($method,array $parameters = [])
    {
        return call_user_func_array([$this->client, $method], $parameters);
    }

    /**
     * redirect to Redis class's command
     *
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->command($method, $parameters);
    }
}
require_once('../Helpers/Debug.php');
$redis = new PhpRedis();

//test samples

//hash
/*$values = [
    "name" => "apple .inc",
    "location" => "California",
    "country" => "US"
];
$google = $redis->HMSET('apple',$values);
vp($google,false);
$googlev = $redis->hgetall('apple');
vp($googlev);*/


//list
/*$l = $redis->lpush('l','first','second','third');
$lr = $redis->lRange('l',0,-1);
vp($l,false);
vp($lr);*/

//set
/*$com1 = $redis->sadd('com1','microsoft','apple','google','github');
$com2 = $redis->sadd('com2','google','alibaba','toyota','tencent');
vp($com1,false);
vp($com2,false);
$intersect = $redis->sinter('com1','com2');
$union = $redis->SUNION('com1','com2');
vp($intersect,false);
vp($union);*/

//zset
/*$zr = $redis->zadd('students','56','xiaoming','93','xiaohong','9','lihua','66','hanmei','85','zhangxing');
vp($zr,false);
$zscores = $redis->zrange('students',0,-1,'withsocres');
vp($zscores);*/