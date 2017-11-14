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
		<body bgcolor="blue">
            
<div class="full">
	<div class="nav">
	
			
			
		<nav class="nav navbar-fixed-top">
	
				
			
			
		<h2>Movie Database</h2>
		
		  <div id="nav">
			<ul class="navbar-right">
					<li><a href="add.php">Add movies</a></li>
				<li><a href="index2.php">HOME</a></li>
					<li><a href="remove.php">Remove movies</a></li>
				</ul>
			</div>
		</nav>
		
	</div></div>
		<?php
		
		
		$sql = "SELECT * FROM movies";
		$run = mysqli_query($conn,$sql);
		/*while($rows = mysqli_fetch_assoc($run) ) {
			echo $rows['name'];
		}*/
		echo "<table class='table' style='color:black;'>
				<thead>
					<tr>
						<th>S.no.</th>
						<th>movie Name</th>
						<th>Director Name</th>
						<th>collections_in_crores_firstday</th>
						<th>Critic Rating </th>
						
					</tr>
				</thead>
				<tbody>
		";
		
		while($rows = mysqli_fetch_assoc($run) ) {
			echo "<tr>
					<td>$rows[movie_id]</td>
					<td>$rows[movie_name]</td>
					<td>$rows[Director_name]</td>
	<td>$rows[collections_in_crores_firstday]</td>
					<td>$rows[critic_rating]</td>
							<td><a href='remove.php?del_id=$rows[movie_id]' class='btn btn-danger'>delete</a></td>
				</tr>				
					
			";
		}
		echo "</tbody></table>";
	?>
	</body>
	<?php
	if(isset($_GET['del_id']) ) {
		$del = "DELETE FROM movies WHERE movie_id = '$_GET[del_id]' ";
		if(mysqli_query($conn,$del)){
			?>
			<script>window.location="remove.php";</script>
			<?php
		
	}
	}
?>
</html>
