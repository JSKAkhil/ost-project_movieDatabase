<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>The Establiisher</title>
		<link rel="stylesheet"  href="css/bootstrap.css">
	
	
	<link rel="stylesheet"  href="css/headfoot.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/fix.js"></script>
	
	<script src="js/bootstrap.js"></script>
	</head>
	
	
<body background="img1.jpg">
<br><br><br><br><br><br><br>
<?php //include 'includes/header.php' ?>
		<div class="signform col-md-6 col-md-offset-3">
			<div class="page-header text-center">
			<h2><font color="white"> LOGIN</font></h2>
		</div>		
		
			<form class="sub" method="post">
				<div class="form-group">
					<label for="user"><font color="white">Email ID</font></label>
					<input  type="email" name="user" class="form-control" required>
				</div>
				<div class="form-group">
                    <label for="pass"><font color="white">Password</font></label>
					<input name="pass" type="password" class="form-control" required>
				</div>
				<input type="submit" name="submit" value="submit" class="btn btn-danger">
				
			</form>
<br>			<a href="signup.php" class="btn btn-info block btn1">Creat New Account</a>
		</div>
			
		
</body>
<?php
if(isset($_POST['submit']) ){
		$user= mysqli_real_escape_string($conn,strip_tags($_POST['user']));
		$password= mysqli_real_escape_string($conn,strip_tags($_POST['pass']));
		if($user=='admin@gmail.com' && $password == 'admin' )
		{
			?>
			<script>window.location = "index2.php"</script>
			<?php
		}
		else {
		$sel_sql="select * from login where email = '" .$user."' and password ='" .$password. "'";
	$run_sql = @mysqli_query($conn, $sel_sql);
    while($row=@mysqli_fetch_assoc($run_sql))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $password == $dbpassword)  
    {  
			?>
			<script>window.location = "home.php";</script>
			<?php
		} 
		else {?>
			<script> alert('invalid User');</script>
			<?php
		}
}
}

			?>
</html>