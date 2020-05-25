<?php
	include('../config.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Plots details</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
	<!--Navigation menu-->
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" style="background-color: #184e8e !important;">
  <a class="navbar-brand" href="#">BhuPlots</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../plots.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
</div>
</nav>

	<!--Blog page-->
    <div class="contact-clean">
        <form method="post" action="launch.php" enctype="multipart/form-data">
            <h2 class="text-center">Enter Plot details</h2>
            <?php
            	echo '<div class="alert alert-success" role="alert">'.$_SESSION["msg"].'</div>';
            ?>
            <div class="form-group">
            	<input class="form-control" type="text" id="name" name="name" placeholder="Name"></div>
            <div class="form-group">
            	<input class="form-control is-invalid" type="text" id="org" name="org" placeholder="Organization name">
            	<small class="form-text text-danger">Please enter your organization name.</small>
            </div>
            <div class="form-group">
            	<input class="form-control is-invalid" type="text" id="location" name="location" placeholder="Location">
            	<small class="form-text text-danger">Please enter a valid Location.</small>
            </div>
            <div class="form-group">
            	<input class="form-control is-invalid" type="text" id="type" name="type" placeholder="Type">
            	<small class="form-text text-danger">Please enter the type of plot.</small>
            </div>
            <div class="form-group">
			    <label for="image">Enter the Plot's Display Photo</label>
			    <input type="file" class="form-control-file" id="image" name="image">
			    <small class="form-text text-danger">Please enter an image of the Plot.</small>
  			</div>
  			<div class="form-group">
            	<input class="form-control is-invalid" type="text" id="price" name="price" placeholder="Price">
            	<small class="form-text text-danger">Please enter the price of the Plot.</small>
            </div>
            <div class="form-group">
            	<label>Brief Description about the plot</label>
            	<textarea class="form-control" name="stats" id="stats" placeholder="Plot details" rows="14"></textarea>
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Post</button>
            </div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>