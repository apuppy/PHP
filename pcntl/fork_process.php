<?php
$pid = pcntl_fork();
if($pid == -1){
	die('could not fork a process');
}else if($pid){
	die("create process successfully \n");
	pcntl_wait($status);
}else{

}
