<?php

//正则结尾加i表示不区分大小写
if (preg_match('/php/i', 'html css javascript PHP MySQL')) {
    echo "php found \n";
} else {
    echo "php not found \n";
}

//\b匹配单词边界
if(preg_match('/web/i','World Wide Web')){
    echo "match \n";
}else{
    echo "not match \n";
}

if(preg_match('/\bweb\b/i','World Wide _Web')) {
    echo "match \n";
}else{
    echo "not match \n";
}

//group by
$str = 'year: 2008';
preg_match('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches);
print_r($matches);

//string include relation use strpos() or strstr
$pos = strpos('abcd','cd');
var_dump($pos);
if($pos !== false){
    echo "found it! \n";
}else{
    echo "Didn't found it! \n";
}

$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain."\n";

$user = strstr($email, '@', true);
echo $user;
?>