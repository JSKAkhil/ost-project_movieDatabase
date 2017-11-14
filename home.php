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
<body>
<?php include "includes/header.php"; ?>
<div class="Container">
	<header>
	<div class="text-center company-name col-md-6 col-md-offset-4" id="top">
			<h1>Movie Database</h1>
			
			<form class="form-inline" method="post" action="home.php">
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
										<th>Director Name</th>

<th>collections_in_crores_firstday</th>

										<th>critic_rating</th>									</tr>
								</thead>
							<tbody>";
							$i=1;
                         
						while($row=mysqli_fetch_assoc($result)){
                           
                               
							echo "
								<tr>
									<td><font color=\"black\">".$i."</td>
									<td><b>".$row['movie_name']."</b></td>
									<td><b>".
$row['Director_name']."</b></td>
<td><b><font color=\"black\">".$row['collections_in_crores_firstday']."</font></b></td>
									<td><b><font color=\"black\">".$row['critic_rating']."</font></b></td>
																</font>";
							$i++;
                            
                       
                    
                        
						 " </tbody>
							</table>
						";
                            
                         
                    }
                            
                         
                             
                    }
                    
				?>
			</div>
			</header>
		
</div>
</body>

</html>
