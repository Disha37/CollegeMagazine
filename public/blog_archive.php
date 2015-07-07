
<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php
$query="SELECT * FROM display_blog ORDER BY blogd_id DESC;";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
    
	{ 
	
		while($row=mysqli_fetch_assoc($result))
		{
		echo "<br>title".$row["blogd_title"]  . "<br>content". $row["blogd_content"]."<br>date".$row["blogd_date"]."<br>author".$row["blogd_author"]  ;
		echo '<br>Average rating<br> '.$row["point_avg"].'<br>users '.$row["users"];
						
		}
		
	}
?>