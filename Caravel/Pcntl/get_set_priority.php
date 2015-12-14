<?php
//get priority
$pid = pcntl_fork();
$priority = pcntl_getpriority($pid);
var_dump($priority);
echo "\n";

//set priority
//pcntl_setpriority用以设置进程的优先级
$priority = 1;
pcntl_setpriority($priority,$pid);
?>
