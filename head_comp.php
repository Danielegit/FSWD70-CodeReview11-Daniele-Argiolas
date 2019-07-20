<!DOCTYPE html>
<html>
<head>
	<title>Travel</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">	

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	

</head>

<body>


<?php
ob_start();
session_start();
require 'engine/db_core.php';

?>

	<header id="header" class="p-0 bg-color">
		<h1 class="p-4 m-0 ">Travels</h1>


		<?php 
			if(!isset($_SESSION["id"])){

				header('Location: index.php');

			}else{

				$row=$conn->query("SELECT * FROM users WHERE user_id=".$_SESSION['id']);
				$row = $row->fetch_assoc();

				if($row['userType'] == 'Admin'){
					$conn_type = 'Admin';
					echo '
					<div class="welcome   text-white text-center">	
						<p class="text-center mt-1">Welcome Admin '.$row['userName'].'</p>

					<a href="engine/logout.php?logout" class="text-white">Sign Out</a>	
					</div>
					';
				}elseif($row['userType'] == 'User'){
					$conn_type = 'User';
					echo '
					<div class="welcome  text-white text-center">	
					<p class="text-center mt-1">Welcome '.$row['userName'].' (User)</p>

					<a href="engine/logout.php?logout" class="text-white text">Sign Out</a>	
					</div>';
				}else{

					header('Location: index.php');
				}
			}
		 ?>
	</header><!-- /header -->
    <nav class="p-3 bg-dark text-white">
      <div class="d-flex justify-content-around w-50" >

      		<div>
      			<a href="home.php" class="text-white"><h5>Home</h5></a>
      		</div>

      		
      		<div>
      			<a href="restaurant.php" class="text-white"><h5>Restaurant</h5></a>
      		</div>

      		<div>
      			<a href="activities.php" class="text-white"><h5>Activities</h5></a>
      		</div>

      		<?php

				if($conn_type == 'Admin'){

				 		echo '
	      		<div>
	      			<a href="create.php" class="text-white"><h5>Admin Panel</h5></a>
	      		</div>';}

      		?>
      </div>
 
  
    </nav>
