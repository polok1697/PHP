<?php 
$age = 11; 
if ($age <= 12) {
    echo "You are a child";
}
elseif ($age <= 19 ) {
    echo "You are a teenager";
} elseif ($age <= 30 ) {
    echo "You are a adult";
}elseif ($age <= 50 ) {
    echo "You are a middle person";
}elseif ($age > 50 ) {
    echo "You are an old" ;
}

 echo "<br>";
$day = "monnday";

switch ($day) {
    case "monday":
        echo "Monday";
        break;
    case "tuesday":
        echo "Tuesday";
        break;
    case "wednesday":
        echo "Wednesday";
        break;
    case "thursday":
        echo "Thursday";
        break;
    case "friday":
        echo "Friday";
        break;
    case "saturday":
        echo "Saturday";
        break;
    case "sunday":
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
        break;
}
echo "<br>";
$myCity= "Dhaka";
  echo ($myCity=="Dhaka") ? "Yes" : "No"; 
  echo "<br>";
 $countyName = "India" ;
 
  echo $countyName ?? "Bangladesh ";
?>


