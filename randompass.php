<?php 
$chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$sflstr= str_shuffle($chars);
echo substr($sflstr, 0, 8);
?>




<a href="./randompass.php">
    <button>Random Password</button> 
</a>