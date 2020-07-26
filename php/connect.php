<?php 
	$server="localhost";
    $username="root";
    $password="";
    $database="hotel";

$db=mysqli_connect("$server","$username","$password");
mysqli_select_db($db,"$database");
?>