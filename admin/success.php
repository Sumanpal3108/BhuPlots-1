<?php
	include('../config.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location:index.php');
	}
	echo '<div class="">You have successfully posted the details of the plot.<a href="post.php">Click here to return to your profile</a></div>';
?>