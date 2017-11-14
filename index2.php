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
	
	<script src="js/bootstrap.js"></script>
	
</head>
<body background="img1.jpg">
<div class="full">
	<div class="nav">
	
			
			
		<nav class="nav navbar-fixed-top">
	
				
			
			
		<h2>Movie Database</h2>
		
		  <div id="nav">
			<ul class="navbar-right">
					<li><a href="add.php">Add movies</a></li>
				
					<li><a href="remove.php">Remove movies</a></li>
				</ul>
			</div>
		</nav>
		
	</div></div>
	
<div class="Container">
	<header>
	<div class="text-center company-name col-md-6 col-md-offset-4" id="top">
			<h1><font color = "white">Movie Database</font></h1>
			
			<form class="form-inline" method="post" action="index.php">
			<div class="form-group">
				<input type="text" class="form-control" name="token" placeholder="search for the movie"> 
				</div>
			<button class="btn btn-info" name="search"><span class='fa fa-search'></span></button>
			</form>
			</div>
			<div class="col-md-6 col-md-offset-3" style="margin-top:50px;">
				<?php
					if(isset($_POST['search'])){
						$search_key=$_POST['token'];
						$sql="select * from movies where movie_name LIKE '%$search_key%'";
						$result=mysqli_query($conn,$sql);
						echo "<table class='table'>
								<thead>
									<tr>
										<th>S No</th>
										<th>movie Name</th>
										<th>director Name</th>
										<th>critic_rating</th>
																			</tr>
								</thead>
							<tbody>";
							$i=1;
						while($row=mysqli_fetch_assoc($result)){
							echo "
								<tr>
									<td>".$i."</td>
									<td>".$row['movie_name']."</td>
									<td>".$row['director_name']."</td>
									<td>".$row['critic_rating']."</td>
									</tr>
							";
							$i++;
						}
						echo " </tbody>
							</table>
						";
					}
				?>
			</div>
			</header>
		
</div>
</body>

</html>