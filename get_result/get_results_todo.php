<?php

include '../engine/db_core.php';

 
if(isset($_REQUEST["term"])){

    $sql = "SELECT * FROM things_todo WHERE todo_name LIKE ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
     
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        

        $param_term = '%'.$_REQUEST["term"] . '%';
        
       
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
           
            if(mysqli_num_rows($result) > 0){
                
                $numresult = mysqli_num_rows($result);
           
                 echo '<hr><h2 class="text-center text-dark col-12 mb-5">'.$numresult.' things to do found</h2>';

                while($td = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   echo '

                    <div class="col-lg-4 ombra m-2 mb-5">
                                    <div class="text-center">
                                        <h3 class=" text-danger m-0">'.$td['todo_name'].'</h3>
    
                                        <div>
                                            <img src="'.$td['todo_pic'].'" class="w-100 imgs">
                                        </div>
                                            <div class="testo_media">
                                                <p class="p-2 mt-3">'.$td['todo_desc'].'</p>
                                            </div>
                                <div class="text-danger">
                                    <p>Type: '.$td['todo_type'].'</p>
                                    <p>Web: <a href="#">'.$td['todo_web'].'</a></p>
                                  
                                </div>  
                                    </div>                             
                                         <a href="individual.php?type=todo&id='.$td['todo_id'].'">
                                        <button type="submit" class=" w-100 bg-success text-white "  name="restaurant" >Open</button>
                                        </a>
                                    </div>
                    ';

                            }
            } else{
                echo "<p>No Activities found</p>";
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