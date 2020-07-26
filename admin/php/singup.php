<?php 
session_start();
	include("connect.php");
	if(isset($_POST['submitup'])){
		$name=strtolower(isset($_POST['name'])?mysqli_real_escape_string($db,$_POST['name']):null);
		$email=strtolower(isset($_POST['email'])?mysqli_real_escape_string($db,$_POST['email']):null);
		$password=isset($_POST['pwd'])?mysqli_real_escape_string($db,password_hash($_POST['pwd'],PASSWORD_BCRYPT)):null;
        $roll=$_POST['roll'];
        $mobile_number=$_POST['phone'];
		if(!preg_match('/[\'^£$%&*()}{@#~?>:;<`>,|=_+¬-]/',$name)){
			if(!preg_match('/[\'^£$%&*()}{#~?`:><>,;|=_+¬-]/',$email)){
               
				mysqli_query($db,"INSERT INTO `employees`(`id`, `name`, `email`, `phone`, `roll`, `password`) VALUES (NULL,'$name','$email','$mobile_number','$roll','$password')");
				$_SESSION['akivoiceid']=mysqli_insert_id($db);
				$_SESSION['loggedinakivoice']="yes";
                $_SESSION['who']=$roll;
				$_SESSION['akiname']=$name;
			header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/'.$roll.'.php');
			}else{
				$_SESSION['error']="This Type of Naming is not allowed";
				header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/index.php');
			}
		}else{
			$_SESSION['error']="This Type of Naming is not allowed";
			header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/index.php');
		}
	}
?>