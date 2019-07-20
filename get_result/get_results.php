<?php

include '../engine/db_core.php';

 
if(isset($_REQUEST["term"])){

    $sql = "SELECT * FROM restaurants WHERE rest_name LIKE ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
     
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        

        $param_term = '%'.$_REQUEST["term"] . '%';
        
       
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
           
            if(mysqli_num_rows($result) > 0){
                
                $numresult = mysqli_num_rows($result);
        
                 echo '<hr><h2 class="text-center col-12 mb-5">'.$numresult.' Restaurants found</h2>';

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
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
                                </div>';

                            }
            } else{
                echo "<p>No Restaurants found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     

    mysqli_stmt_close($stmt);
}else{
 
    }

echo '</div>';

 

mysqli_close($conn);
?>