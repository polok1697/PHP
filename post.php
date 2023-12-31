<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["showName"])) {
    $realName = $_POST["name"];

}


?>
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
<input type="text" name="name" placeholder="Enter Your Name">
<input type="submit" value="submit" name="showName">
</form>


<?php 
echo $realName ?? null;
?>


 