<?php
//time microtime sleep usleep
list($msec,$sec) = explode(' ',microtime());
echo($msec.'|'.$sec);
?>