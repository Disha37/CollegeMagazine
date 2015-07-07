<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['post_f']))
{
	
	$content=$_POST["feed"];
	$date=$_POST["feed_date"];


$query = "INSERT INTO feedback( ";
	$query.="feed_content,feed_date";
	$query.=") VALUES (";
	$query.="'{$content}','{$date}'";
	$query.= ")";
		
		
	$result=mysqli_query($connection,$query);
	
	if($result)
	{
		echo "updated";
		redirect_to("users_page.php");
		
	}
	else
	
		echo "fail";
	
}


?>

 <?php if(isset($connection)) {mysqli_close($connection);} ?>
 <?php
 redirect_to("users_page.php");?>