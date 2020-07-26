<?php 
    if(isset($_POST['submit'])){
        include("connect.php");
        $id=$_POST['paid'];
        mysqli_query($db,"UPDATE `room` SET `check_in`='1', `pay`='paid' WHERE `id`='$id'");
     header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/see-checkin.php'); 
    }
?>