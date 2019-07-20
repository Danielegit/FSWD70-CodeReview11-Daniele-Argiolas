<?php 
ob_start();
session_start();
require 'engine/db_core.php';

if(isset($_POST)){

	$email = $_POST['userEmail'];

	$pass = hash('sha256', $_POST['userPass']);

	$query = "SELECT user_id, userName, userEmail, userPass FROM users WHERE userEmail='$email'";

	$find = $conn->query($query);

	if($find->num_rows > 0 and $_POST['userEmail'] !=""){

			$find = $find->fetch_assoc();

			if($find['userPass'] == $pass){

				$_SESSION['id'] = $find['user_id'];

				header('location:home.php');

			}else{
				echo "<br>Error, <a href='index.php'>Wrong Password!!</a>";
			}	

	}else{echo '<a href="index.php"><h2>Wrong email, try again!</h2><a>';}


}else{

	header('Location: index.php');

}

?>