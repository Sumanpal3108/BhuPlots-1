<?php
  include('../config.php');
  session_start();
  $name = mysqli_escape_string ($con,strip_tags($_POST['name']));
  $org = mysqli_escape_string ($con,strip_tags($_POST['org']));
  $location = mysqli_escape_string ($con,strip_tags($_POST['location']));
  $type = mysqli_escape_string ($con,strip_tags($_POST['type']));

  //image file upload

  $image1 = $_FILES['image1']['name'];
  $loc="plots-images/".$image1;

  $price = mysqli_escape_string ($con,strip_tags($_POST['price']));
  $option = mysqli_escape_string ($con,strip_tags($_POST['option']));

  //entering the data into the table
  $plot = "INSERT INTO plot(name,org,location,type,image1,price,option) VALUES('$name','$org','$location','$type','$image1','$price','$option')";
	$plot_result=mysqli_query($con,$plot) or die(mysqli_error($con));
	move_uploaded_file($_FILES['image1']['tmp_name'],$loc);
	header('Location:success.php');

?>
