<?php 
session_start();
    include("connect.php");
    if(isset($_POST['submit'])){
        $name=isset($_POST['name'])?$_POST['name']:null;
        $email=isset($_POST['email'])?$_POST['email']:null;
        $phone=isset($_POST['phone'])?$_POST['phone']:null;
        $password=isset($_POST['pwd'])?password_hash($_POST['pwd'],PASSWORD_BCRYPT):null;
        
        mysqli_query($db,"INSERT INTO `user`(`id`, `name`, `phone`, `email`, `password`) VALUES (NULL,'$name','$email','$phone','$password')");
        $last_inserted_id=mysqli_insert_id($db);
        $_SESSION['login']='true';
        $_SESSION['idlogin']=$last_inserted_id;
        $_SESSION['name']=$name;
        header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/index.php'); 
    }
?>