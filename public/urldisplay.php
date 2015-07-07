<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if(isset($_GET["blog_id"]))
{
	$blog=$_GET["blog_id"];
$query='SELECT * FROM display_blog where blogd_id='.$blog;
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
		
		echo "<br>title".$row["blogd_title"]  . "<br>content". $row["blogd_content"]."<br>date".$row["blogd_date"]."<br>author".$row["blogd_author"].
		'<br>Average rating<br> '.$row["point_avg"].'<br>users '.$row["users"];	
											
		
		
		
}
?>
<?php 
if(isset($_GET["file_id"]))
{
$folder = "files_disp";
$file=$_GET["file_id"];
      
		  $query4="SELECT * FROM files WHERE file_id='{$file}'";
		$result4=mysqli_query($connection,$query4);
		$row4=mysqli_fetch_assoc($result4);
                echo '              
                    <div >
			  <a href="'.$folder . '/' . $row4["file_name"].'" target="_self">'.$row4["file_name"].'</a>
			  Author:'.$row4["file_author"].'
						Description:'.$row4["file_desc"].
							'Date:'.$row4["file_date"].
						'Average rating	'.$row4["point_avg"].'<br>users '.$row4["users"].'
                                            
                </div>';
       
}
?>
<?php 
if(isset($_GET["img_id"]))
{
	      $folder = "images_disp";
              
             $img=$_GET["img_id"];          
            $query3="SELECT * FROM images WHERE img_id='{$img}'";
				$result3=mysqli_query($connection,$query3);
				$row3=mysqli_fetch_assoc($result3);
                echo '              
                    <div >
                        <img src="'.$folder . '/' . $row3["img_name"].'" alt="..." width="200px" height="200px"> 
						Author:'.$row3["img_author"].'
						Description:'.$row3["img_desc"].
							'Date:'.$row3["img_date"].
						'Average rating'.$row3["point_avg"].'<br>users '.$row3["users"].'
							
                                               
                </div>';
           }
           

?>