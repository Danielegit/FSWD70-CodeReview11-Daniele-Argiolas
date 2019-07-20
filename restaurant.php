<?php 
include 'head_comp.php';
$rest_query = 'SELECT * from restaurants left join location ON FK_location = location_id';
 ?>
<hr>

 	 	<div id="default">
				<?php  echo '<h2 class="text-center  mb-5">Restaurants </h2>';?>

		        <div class="container row d-flex justify-content-around" >
				<?php  

				$rest = $conn->query($rest_query);

				if($rest->num_rows > 0){
			    	while ($row = $rest->fetch_assoc()) {
			        echo '
                
                                <div class="col-lg-4 ombra m-2 mb-5">
                                <div class="text-center">
                                    <h3 class=" text-danger m-0">'.$row['rest_name'].'</h3>

                                    <div>
                                        <img src="'.$row['rest_pic'].'" class=" w-100 imgs">
                                    </div>
                                        <div class="testo_media text-dark">
                                            <p class="p-2 mt-3">'.$row['rest_desc'].'</p>
                                        </div>
                                    <div class="text-danger">
                                        <p> '.$row['rest_type'].' Cuisine</p>
                                        <p> Tel. '.$row['rest_phone'].'</p>
                                        <p>Web: <a href="#">'.$row['rest_web'].'</a></p>
                                    </div>  
                                </div>                             
                                     <a href="individual.php?type=restaurant&id='.$row['rest_id'].'">
                                        <button type="submit" class=" w-100 bg-success text-white "  name="restaurant" >Open</button>
                                     </a>
                                </div>';  }
                            }
 					  ?>       
 			    	</div>	
 		</div> 
 		<hr>

 		<?php include_once 'foot_comp.php'; ?>
