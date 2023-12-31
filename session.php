<?php 
session_start( );
$_SESSION['name'] = "Melon";
$_SESSION ['city'] = "Dhaka";
$_SESSION ['state'] = "Hazaribagh";
$_SESSION ['country'] = "Bangladesh";

echo $_SESSION ['name']. "<br />";

?>