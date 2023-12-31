<?php 

$x= 0 ; 
while ($x <10) {
    echo $x . "," ;
    $x++ ;
}
echo "<br>";
$y= 35 ;

do  {
    echo $y. "," ;
    $y++ ;
} while ($y < 10);

echo "<br>";
for ($i = 1; $i <=100 ; $i++) {
  
    if ($i == 22) {
        continue; 
    }
   
    if ($i % 2 ==0)
    echo $i . ",";
    if ($i > 40) {
        break;}
       
        
    } 



echo "<br>";


$color = ["red", "green", "black", "blue"];
foreach ($color as $value) {
    echo $value. "<br>";
}



$namta = 3;
for ($i = 1; $i <=20; $i++) {
    echo $namta. "x" . $i . "=" . $namta * $i . "<br>";  
}
?>