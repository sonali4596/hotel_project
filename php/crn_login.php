<?php 
session_start();
    include("connect.php");
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $crn=$_POST['crn'];
        
        $get_the_data=mysqli_query($db,"SELECT `id`,`name`,`crn` FROM `room` WHERE `email`='$email' AND `check_in`='1' AND `crn`='$crn';");
        $fetch_the=mysqli_fetch_assoc($get_the_data);
        if($crn==$fetch_the['crn']){
           
        $_SESSION['login']='true';
        $_SESSION['idlogin']=$fetch_the['id'];
        $_SESSION['name']=$fetch_the['name'];
            header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/order-food.php'); 
        }else{
            echo "smoeting";
        }
    }
?>