<?php 
session_start();
    include("connect.php");
    if(isset($_POST[''])){
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        
        $get_the_data=mysqli_query($db,"SELECT `id`,`name`,`password` FROM `room` WHERE `email`='$email' AND `check_in`='1'");
        $fetch_the=mysqli_fetch_assoc($get_the_data);
        if(password_verify($password,$fetch_the['password'])){
        $_SESSION['login']='true';
        $_SESSION['idlogin']=$fetch_the['id'];
        $_SESSION['name']=$fetch_the['name'];
            header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/index.php'); 
        }
    }
?>