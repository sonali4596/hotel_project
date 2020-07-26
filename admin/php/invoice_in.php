<?php 
session_start();
include("connect.php");
	if(isset($_SESSION['loggedinakivoice']) && isset($_SESSION['akivoiceid'])){ 
		if(isset($_POST['submit'])){
		$name=isset($_POST['name'])?mysqli_real_escape_string($dbseft,$_POST['name']):null;
		$email=isset($_POST['email'])?mysqli_real_escape_string($dbseft,$_POST['email']):null;
		$gst=isset($_POST['gst'])?mysqli_real_escape_string($dbseft,$_POST['gst']):null;
		$address=isset($_POST['address'])?mysqli_real_escape_string($dbseft,$_POST['address']):null;
		$pincode=isset($_POST['pincode'])?mysqli_real_escape_string($dbseft,$_POST['pincode']):null;
		$service=isset($_POST['service'])?mysqli_real_escape_string($dbseft,$_POST['service']):null;
		$fees_amount=isset($_POST['fees'])?mysqli_real_escape_string($dbseft,$_POST['fees']):null;
		date_default_timezone_set("Asia/Kolkata");
		$icsn=date("Ysimd");
		$date=date("Y-m-d");
		$time=date("H:i:s");
			mysqli_query($dbseft,"INSERT INTO `invoice`(`id`, `icsn`, `name`, `email`, `gst`, `addres`, `pincode`, `service`, `fees`, `date`, `time`) VALUES ('null','$icsn','$name','$email','$gst','$address','$pincode','$service','$fees_amount','$date','$time')");
			header('location: http://'.$_SERVER['HTTP_HOST'].'/menu/akivoice/invoice/invoice_aki.php?invoice='.$icsn);
		}
	}else{	
		header('location: http://'.$_SERVER['HTTP_HOST'].'/menu/akivoice/index.php'); 
		}
?>