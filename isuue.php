<?php include "includes/db.php";?>
<!DOCTYPE html>
<html>
<head>
<title>
Movie Database
</title>
<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/lightbox.css">
	<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet"  href="css/headfoot.css">
	<link rel="stylesheet"  href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/fix.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>
<body background="img.jpg">
<?php include "includes/header.php"; ?>
<center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>    <?php
echo "<font color=\"white\">YOUR UNIQUE ID FOR ISSUING THE BOOK IS : <b>" . (rand(1000,1000000)) . "</font>";
?>
    </center>
    </body>

