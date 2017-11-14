<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>The Establiisher</title>
		<link rel="stylesheet"  href="css/bootstrap.css">
	
	<link rel="stylesheet"  href="css/signstyle.css">
	<link rel="stylesheet"  href="css/headfoot.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/fix.js"></script>
	
	<script src="js/bootstrap.js"></script>
	</head>
	
	
<body background="img.jpg">
<?php include 'includes/header.php' ?>
<div class="container">
		<div class="signform">
			<form class="sub" method="post">
				<div class="form-group">
					<label for="user">User Name</label>
					<input  type="text" name="user" class="form-control">
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input name="pass" type="password" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<input name="email" type="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Phone Number</label>
					<input name="phn" type="text" class="form-control">
				</div>
				
				
				<input type="submit"  name="submit" class="btn btn-primary col-md-2 sub"  value="sign up">
			</form>
			</div>
			</div>
		</body>
		
		<?php 
//adding a new user
	if(isset($_POST['submit']) ){
		$user= mysqli_real_escape_string($conn,strip_tags($_POST['user']));
		$email= mysqli_real_escape_string($conn,strip_tags($_POST['email']));
		$password= mysqli_real_escape_string($conn,strip_tags($_POST['pass']));
		$phn= mysqli_real_escape_string($conn,strip_tags($_POST['phn']));
		
		
		$ins_sql = "INSERT INTO signup (user_name, email, password, phn_no) VALUES('$user', '$email', '$password', '$phn')";
		if(mysqli_query($conn,$ins_sql)){
		$sql = "insert into login (email, password) values ('$email', '$password')";
		if(mysqli_query($conn,$sql)){?>
		<script>window.location = "index.php";</script>
	<?php
	}
	}
	}
	?>
</html>