<?php
/*
$arrStr=file_get_contents('sortArrInFile');
$multiArr=unserialize($arrStr);
echo '<pre>';
var_dump($multiArr);
echo '</pre>';
*/
$arrStr=file_get_contents('simpleArr');
$originArr=unserialize($arrStr);

$sortArr=[];
$pidArr=[];

//pid
foreach($originArr as $k => $v){
    if(!in_array($v['pid'],$pidArr)){
        array_push($pidArr,$v['pid']);
    }
}
//按pid组合空数组
foreach($pidArr as $k => $v){
    $sortArr[$v]=[];
}

//数组按pid分类
foreach($originArr as $k => $v){
    //echo $v['pid'].'<br>';
    if(in_array($v['pid'],$pidArr)){
        array_push($sortArr[$v['pid']],$v);
    }
}
?>
