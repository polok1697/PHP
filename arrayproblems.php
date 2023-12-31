<?php 
// find maximum number from array:
$numbers = array(5, 2, 9, 1, 7, 8, 9, 9, 9, 9, 10);
$max = max($numbers);
echo "Maximum number: $max"; 
echo "<br>";

// $numbers = array(5, 2, 9, 1, 7);
rsort($numbers);
$uniqueNumbers = array_values(array_unique($numbers));
echo "Second maximum number: ".$uniqueNumbers[1];

echo "<br>";


$numbers = array(5, 2, 9, 1, 7);
sort($numbers);
print_r($numbers);

$numbers = array(1, 2, 3, 2, 4, 5, 3);
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers);


?>