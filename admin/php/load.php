<?php 
	session_start();
include("connect.php");
if(isset($_GET['icsn'])){
	$icsn=$_GET['icsn'];
	$get_the_data=mysqli_query($dbseft,"SELECT COUNT(`id`) AS `id` FROM `invoice` WHERE `icsn`='$icsn'");
	$fetch=mysqli_fetch_assoc($get_the_data);
	if($fetch['id']){
		echo json_encode(array("yes"));
	}else{
		echo json_encode(array("no"));
	}
	
}elseif(isset($_GET['email'])){
	 $email=$_GET['email'];
	 $get_the_data=mysqli_query($dbseft,"SELECT  `icsn`,`name`,`date` FROM `invoice` WHERE `email`='$email'");
	$details=array();
	while($fetch=mysqli_fetch_assoc($get_the_data)){
		$icsn=$fetch['icsn'];
		$name=$fetch['name'];
		$date=$fetch['date'];
		$details[]=array($icsn,$name,$date);
	}
	if(count($details)==0){
		echo json_encode(array("empty"));	
	}else{
	echo json_encode($details);
	}
 }else{
	 $name=strtolower($_GET['name']);
	 $get_the_data=mysqli_query($dbseft,"SELECT `icsn`, `name`,`date` FROM `invoice` WHERE `name` LIKE '%$name%'");
	$details=array();
	while($fetch=mysqli_fetch_assoc($get_the_data)){
		$icsn=$fetch['icsn'];
		$name=$fetch['name'];
		$date=$fetch['date'];
		$details[]=array($icsn,$name,$date);
	}
	if(count($details[0])==0){
		echo json_encode(array("empty"));	
	}else{
	echo json_encode($details);
	}
 }
?>