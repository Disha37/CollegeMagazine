<?php require_once("../includes/db_connection.php");?>
<?php 
 if (isset($_POST['rev_i']))
{
	$id=$_POST["id"];
    $rating=$_POST["rating"];

	
	$q="SELECT * FROM images WHERE img_id={$id}";
$r=mysqli_query($connection,$q);
$row=mysqli_fetch_assoc($r);
$point=$row["points"]+$rating;
$user=$row["users"]+1;
$avg=$point/$user;
$query = "UPDATE images SET points={$point} WHERE img_id ={$id}";
$result=mysqli_query($connection,$query);
$query2 = "UPDATE images SET users={$user} WHERE img_id ={$id}";
$result2=mysqli_query($connection,$query2);
$query3 = "UPDATE images SET point_avg={$avg} WHERE img_id ={$id}";
$result3=mysqli_query($connection,$query3);
header("Location:" . "display.php");
	 exit;
}		?>
<?php 
 if (isset($_POST['rev_b']))
{
	$id=$_POST["id"];
    $rating=$_POST["rating"];

	
	$q="SELECT * FROM display_blog WHERE blogd_id={$id}";
$r=mysqli_query($connection,$q);
$row=mysqli_fetch_assoc($r);
$point=$row["points"]+$rating;
$user=$row["users"]+1;
$avg=$point/$user;
$query = "UPDATE display_blog SET points={$point} WHERE blogd_id ={$id}";
$result=mysqli_query($connection,$query);
$query2 = "UPDATE display_blog SET users={$user} WHERE blogd_id ={$id}";
$result2=mysqli_query($connection,$query2);
$query3 = "UPDATE display_blog SET point_avg={$avg} WHERE blogd_id ={$id}";
$result3=mysqli_query($connection,$query3);
header("Location:" . "display.php");
	 exit;
}		?>
<?php 
 if (isset($_POST['rev_a']))
{
	$id=$_POST["id"];
    $rating=$_POST["rating"];

	
	$q="SELECT * FROM files WHERE file_id={$id}";
$r=mysqli_query($connection,$q);
$row=mysqli_fetch_assoc($r);
$point=$row["points"]+$rating;
$user=$row["users"]+1;
$avg=$point/$user;
$query = "UPDATE files SET points={$point} WHERE file_id ={$id}";
$result=mysqli_query($connection,$query);
$query2 = "UPDATE files SET users={$user} WHERE file_id ={$id}";
$result2=mysqli_query($connection,$query2);
$query3 = "UPDATE files SET point_avg={$avg} WHERE file_id ={$id}";
$result3=mysqli_query($connection,$query3);
header("Location:" . "display.php");
	 exit;
}		?>
 <?php if(isset($connection)) {mysqli_close($connection);} ?>
 