<?php
	include('../config.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location:index.php');
	}
	$_SESSION["msg"]="";
    $email=mysqli_escape_string($con,strip_tags($_POST['email']));
    $pwd=mysqli_escape_string($con,strip_tags($_POST['password']));
    $login="SELECT * FROM admin WHERE email='$email' AND password='$pwd'";
    $login_result=mysqli_query($con,$login) or die(mysqli_error($con));
    if(mysqli_num_rows($login_result)==1){
        $_SESSION["msg"]="Successfully logged in!";
        header('Location:post.php');
    }else if(mysqli_num_rows($login_result)==0){
        $_SESSION["msg"]="Login unsuccessful!";
        header('Location:index.php');
    }else{
    	$_SESSION["msg"]="";
    	header('Location:index.php');
    }
    $_SESSION['email']=$email;
?>