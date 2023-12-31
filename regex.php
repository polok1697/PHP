<?php 
$str = "hello world"; 
$pattern = "/world/"; 

echo preg_match($pattern, $str);



echo "<br />";

$mobile = "01722225994";
$pattern = "/01[0-9]{9}/";
echo preg_match($pattern, $mobile);

?>