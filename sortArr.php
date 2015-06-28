<?php
$arrStr=file_get_contents('sortArrInFile');
$multiArr=unserialize($arrStr);
echo '<pre>';
var_dump($multiArr);
echo '</pre>';
?>
