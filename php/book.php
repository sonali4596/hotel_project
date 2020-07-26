<?php 
session_start();
include("connect.php");
if(isset($_GET['amount'])){
    $amount=isset($_GET['amount'])?$_GET['amount']:null;
    $payment=isset($_GET['pay'])?$_GET['pay']:null;
    date_default_timezone_set("Asia/Kolkata");
    $checkindate=date("d-m-Y");
    $checkoutdate=date('d-m-Y', strtotime($checkindate. ' + 1 days'));
    $name=isset($_POST['name'])?$_POST['name']:null;
    $mobile=isset($_POST['mobile'])?$_POST['mobile']:null;
    $email=isset($_POST['email'])?$_POST['email']:null;

    $get_the_data=mysqli_query($db,"SELECT  MAX(`room`) AS `room` FROM `room`");
    $fetch_the_data=mysqli_fetch_assoc($get_the_data);
    $crn="CRN".date("Ymids");
    $room_data=$fetch_the_data['room'];
    if($room_data=="0"){
        $room_data=145;
    }else{
        $room_data=$room_data+1;
    }
   
    mysqli_query($db,"INSERT INTO `room`(`id`, `name`, `mobile`, `email`, `checkin_date`, `checkout_date`, `pay`,`room`,`crn`,`check_in`) VALUES (NULL,'$name','$mobile','$email','$checkindate','$checkoutdate','$payment','$room_data','$crn','0')");
     header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/successfull.php?cdate='.$checkindate.'&codate='.$checkoutdate.'&room='.$room_data); 

}

?>