

<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>

<?php
           
           
           $folder = "files_disp";
           $results = scandir('files_disp');
           $query4="SELECT * FROM files ORDER BY file_id DESC";
			$result4=mysqli_query($connection,$query4);
				   
					 while($row4=mysqli_fetch_assoc($result4))
			  {
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
                         
            if (is_file($folder . '/' . $result) && ($result==$row4["file_name"])) {
				
                echo '              
                    <div >
			  <a href="'.$folder . '/' . $result.'" target="_blank">'.$result.'</a>
			  Author:'.$row4["file_author"].'
						Description:'.$row4["file_desc"].
						'Date:'.$row4["file_date"].
						'Average rating	'.$row4["point_avg"].'<br>users '.$row4["users"].'
							                                             
                </div>';
            }
           }
			  }
           ?>	