<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html>
		<head>
			<title>Movie Database</title>
			<link rel="stylesheet"  href="css/bootstrap.css">
			<link rel="stylesheet"  href="css/signstyle.css">
			<link rel="stylesheet"  href="css/headfoot.css">
			<link rel="stylesheet"  href="css/font-awesome.css">
			<script src="js/jquery.js"></script>
			<script src="js/fix.js"></script>
			<script src="js/bootstrap.js"></script>

		</head>
	<body>
		<div class="nav">	
		<nav class="nav navbar-fixed-top">
		<h2>Movie Database</h2>
		  <div id="nav">
			<ul class="navbar-right">
					<li><a href="index2.php">Home</a></li>
					<li><a href="remove.php">Remove movies</a></li>
				</ul>
			</div>
		</nav>
		<header>
			<div class="container">
				<center> <h1>Add more movies<h1></center>
				<form method="post" class="signform">
				<div
				<div class="form-group">
				<label> movie Name </label>
				<input class="form-control" type="text" name="movieName" required />
				</div>
				<div class="form-group">
				<label> director Name </label>
				<input class="form-control" type="text" name="directorName" required />
				</div>
			<div class="form-group">
				<label> collections_in_crores_firstday </label>
				<input class="form-control" type="text" name="collections_in_crores_firstday" />
				</div>
			<div class="form-group">
				<label> critic_rating</label>
				<input class="form-control" type="text" name="critic_rating" required />
				</div>
			
				<button class="btn btn-primary" name="add">Add movie</button>
				</form>
			</header>
		</div>
		
	</body>
	<?php
	if(isset($_POST['add']) ){
		echo $movie_name=$_POST['movieName'];
		echo $Director_name= $_POST['directorName'];
		echo $collections_in_crores_firstday = $_POST['collections_in_crores_firstday'];
		echo $critic_rating= $_POST['critic_rating'];
		
		
		
		$ins_sql = "INSERT INTO movies (movie_name, Director_name, collections_in_crores_firstday, critic_rating) VALUES('$movie_name', '$Director_name', '$collections_in_crores_firstday', '$critic_rating')";
		if(mysqli_query($conn,$ins_sql)){	?>
		<script>window.location = "add.php";</script>
	<?php
	}}?>
</html>
