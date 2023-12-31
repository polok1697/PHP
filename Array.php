<?php 
// index arrays
$studentsName = [ "Kamal", "Jamal", "Motiar", "Melon", "Tahun", "Raja"];


var_dump ( $studentsName ) ;

echo "<br>";
echo "<pre>";

print_r($studentsName);
echo "</pre>";
echo gettype($studentsName);
?>


<?php 
$studentData = [

    "Name"	=>	"Md. Kamal",
    "Age"    =>    "18",
    "Gender"    =>    "Male",
    "Address" => "Kushtia"
];

echo "<pre>";

print_r( $studentData);
echo "</pre>";
echo $studentData["Age"]; 
echo "</br>";
foreach ($studentData as $key => $value ) { 
    echo $key. " : ". $value. "<br>";
 } 





?>

<?php 



//  multidimensional array 

$studentData = [
    [
        "Name"    =>    "Md. Kamal",
        "Age"    =>    "18",
        "Gender"    =>    "Male",
        "Address" => "Kushtia"
    ],
    [
        "Name"    =>    "Md. Jamal",
        "Age"    =>    "18",
        "Gender"    =>    "Male",
        "Address" => "Dhaka"
    ]
];

echo "<pre>";
print_r( $studentData );

echo "</pre>";



?>
<?php 
$bangladeshCities = [
    "Dhaka",
    "khulna",
    "Rajshahi",
    "Chittagong",
    "Barisal",
    "Rangpur",
    "Sylhet",
    "Kushtia",
    "Pabna", 
    
];

?>

<form action="">
    <select name="" id="">
        <option value="">Select</option> 
        <?php foreach($bangladeshCities as $cities){ ?> 
            <option value=""> <?= $cities; ?></option>

      <?php   } ?>

    </select>
</form>

