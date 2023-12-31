<?php 

/*Electric bill calculation (For 50 units – 3.50 tk/unit For 150 units – 4.00
tk/unit For next 250 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)*/

$bill = 50;
$units = 150;
if ($units <= 50) {
    $bill = $units * 3.50;
} elseif ($units > 50 && $units <= 100) {
    $bill = $units * 4.00;
} elseif ($units > 100 && $units <= 250) {
    $bill = $units * 5.20;
} elseif ($units > 250) {
    $bill = $units * 6.50;
}

echo $bill;


echo "<br>";

/*Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00
tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)*/
$bill = 300;

if ($bill <= 50 ){
    $bill = $bill * 3.50;
}elseif ($bill <= 150 ){
    $bill = $bill * 3.50 + (($bill-50)*(4-3.50)) ;
}elseif ($bill <=250 ){
    $bill= $bill * 3.50 + (($bill-150)*(5.20-3.50)+(100*(4-3.50)));
}else {
    $bill = $bill * 3.50 + (($bill-250)*(6.50-3.50)+(100*(5.20-3.50))+(100*(4-3.50)));
   
}
echo $bill;


echo "<br>";
//  Deferent away Electric bill calculation 

$bill = 300;
if ($bill <= 50 ){
    $bill = $bill * 3.50;
}elseif ($bill <= 150 ){
    $bill= (3.50 *50) + (4*($bill-50));
}elseif ($bill <=250 ){
    $bill= (3.50 *50) + (4*100) +(5.20*($bill-250));
}else {
       $bill = (3.50 *50) + (4*100) +(5.20*100) + (6.50*($bill-250));
}
echo $bill;
?>


<!-- A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division) -->

<br>

<?php 
$num1 = 10;
$num2 = 20;

$operator = "*";

switch ($operator) {
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
        $result = $num1 / $num2;
        break;
    default:
        echo "Invalid operator";
        break;
        
}
echo $result;
?>
<br>

<!-- Check if a person is eligible to vote by age  -->

<?php 
$age = 18;

if ($age >= 18) {
    echo "Eligible to vote";
} else {
    echo "Not eligible to vote";
}




?>
<br>

<!-- Check if a person is eligible for marriage in BD by gender.  -->
<?php 

$gender = "male";
$age = 21;

if ($gender == "female") {
    if ($age >= 18) {
        echo "You are eligible to marrige";
    } else {
        echo "You are not eligible to marrige";
    }
} else {
    if ($age >= 21) {
        echo
        "You are eligible to marrige";
} else {
    echo "You are not eligible to marrige";
}

}

?>

<br>
 <!-- deferent away Check if a person is eligible for marriage in BD by gender.  -->
<?php 

$gender = "male";
$age = 18;

if ($gender == "female") {
    if ($age >= 18) {
        echo "You are eligible to marrige";
    } else {
        echo "You are not eligible to marrige";
    }
} else if ($gender == "male") {
    if ($age >= 21) {
        echo
        "You are eligible to marrige";
} else {
    echo "You are not eligible to marrige";
}

}


?>


<br>

<!-- Check if number is positive or negetive  -->
<?php 
$num = -20;
 if ($num > 0) {
    echo "positive";
 } elseif ($num < 0) {
    echo "negative";
    } else {
    echo "zero";
 }


?>

<br>


<!-- Check if number is odd or even  -->
<?php 

$number = 7;

if ($number % 2 == 0) {

    echo "even";

} else {
    echo "odd";
}

?>


<br>
<!-- Check if data is integer or string  -->

<?php 


$checkData = " 20";

var_dump($checkData)

?>