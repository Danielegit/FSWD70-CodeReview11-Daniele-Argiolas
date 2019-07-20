

<?php  

if($_POST){

	function antiHaker($arr_post){
		
		foreach($arr_post as $key => $value) { 

		    $arr_post[$key] = htmlspecialchars(strip_tags(trim($value)));        
		} 
		return $arr_post;
	}

	$arr = Array($_POST['userName'],$_POST['userEmail'],$_POST['userPass']);

	$data = antiHaker($arr);

	$pass= hash('sha256', $data[2]);

	require 'engine/db_core.php';

	$query = "INSERT INTO `users`( `userName`, `userEmail`, `userPass`)

			  VALUES('$data[0]','$data[1]','$pass')";

			/*  echo $query;*/
	
	if($conn->query($query) === true){

		 header('location:index.php');

	}else{

		echo '<a href="../home.php">..Sorry try again</a>'.mysqli_error($conn);
	}
	
}

?>