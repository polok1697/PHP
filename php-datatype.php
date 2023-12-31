<?php 
//string
$personName = "melon" ;

var_dump($personName);
echo "<br>";

// integer

$personAge = 39;
var_dump($personAge);
echo "<br>";
// float

$personHeight = 5.8;
var_dump($personHeight);
echo "<br>";



//boolen 

$personMale = true;

var_dump($personMale);
echo "<br>";

// array

$parsonHobbies = ["Reading", 123, true]; 
var_dump($parsonHobbies);
echo "<br>";

// object

class PersonInfo{
    public $personName = "Akram Khan";

}

$object = new PersonInfo;
var_dump($object);
echo "<br>";

//null

$personName = null;
var_dump($personName);

// contant
echo "<br>";




?>