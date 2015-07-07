

<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php
           $folder = "images_disp";
           $results = scandir('images_disp');
		   $query3="SELECT * FROM images ORDER BY img_id DESC ";
		   $result3=mysqli_query($connection,$query3);
		  
		   
		           
		             
					 while($row3=mysqli_fetch_assoc($result3))
			  {
				  foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
            if (is_file($folder . '/' . $result)  && ($result==$row3["img_name"])){
				      

                echo '              
                    <div >
                        <img src="'.$folder . '/' . $result.'" alt="..." width="200px" height="200px"> 
						Author:'.$row3["img_author"].'
						Description:'.$row3["img_desc"].
						'date:'.$row3["img_date"].
						'Average rating'.$row3["point_avg"].'<br>users '.$row3["users"].'
										
						
                                               
                </div>';
            }
           }
			  }
           ?>