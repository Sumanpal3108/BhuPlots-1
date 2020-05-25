<?php
	include('../config.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location:index.php');
	}
	$name = mysqli_escape_string($con,strip_tags($_POST['name']));
	$org = mysqli_escape_string($con,strip_tags($_POST['org']));
	$location = mysqli_escape_string($con,strip_tags($_POST['location']));
	$type = mysqli_escape_string($con,strip_tags($_POST['type'])); 
	$price = mysqli_escape_string($con,strip_tags($_POST['price']));
	//This is the directory where images will be saved
	$target = "../plots/";
	$target = $target . basename( $_FILES['image']['name']);

	//This gets all the other information from the form
	$Filename=$_POST['Filename'];
	$Description=$_POST['Description'];
	$pic=($_FILES['image']['name']);

	$post = "INSERT INTO plot(name,org,location,type,image,price) VALUES('$name','$org','$location','$type','$pic','$price')";
	move_uploaded_file($_FILES['image']['tmp_name'], $target);
	$post_result = mysqli_query($con,$post);
	header('Location:success.php');
?>