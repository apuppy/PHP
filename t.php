<?php
ob_start();
phpinfo();
$str = ob_get_clean();
//echo $str;
exit;