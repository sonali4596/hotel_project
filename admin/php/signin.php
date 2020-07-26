<?php 
session_start();
include("connect.php");
if(isset($_POST['submitin'])){
	$email=isset($_POST['email'])?mysqli_real_escape_string($db,$_POST['email']):null;
	$password=isset($_POST['password'])?mysqli_real_escape_string($db,$_POST['password']):null;
	$get_the_num=mysqli_query($db,"SELECT `password` FROM `employees` WHERE `email`='$email'");
	$fetch_the_details=mysqli_fetch_assoc($get_the_num);
	if(count($fetch_the_details['password'])!=0){
		if(password_verify($password,$fetch_the_details['password'])){
			$get_the_num=mysqli_query($db,"SELECT `id`,`name`,`roll` FROM `employees` WHERE `email`='$email'");
			$fetch_the_details=mysqli_fetch_assoc($get_the_num);
			$_SESSION['loggedinakivoice']="yes";
            $_SESSION['who']=$fetch_the_details['roll'];;
			$_SESSION['akivoiceid']=$fetch_the_details['id'];
			$_SESSION['akiname']=$fetch_the_details['name'];
			header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/'.$_SESSION['who'].'.php');
		}else{
			$_SESSION['error1']="Password Didn't Match";
			header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/index.php');
		}
	}else{
		$_SESSION['error1']="We Cannot find Account with this account";
		header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/index.php');
	}
}

?>