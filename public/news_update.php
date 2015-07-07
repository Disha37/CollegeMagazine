<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['news_b']))
{
	$title=mysql_prep($_POST["news_title"]);
   	$date=$_POST["news_date"];
	$content=mysql_prep($_POST["news_content"]);


$query = "INSERT INTO news( ";
	$query.="news_title,news_date,news_content";
	$query.=") VALUES (";
	$query.="'{$title}','{$date}','{$content}'";
	$query.= ")";
		
		
	$result=mysqli_query($connection,$query);
	
	}


?>

 <?php if(isset($connection)) {mysqli_close($connection);} ?>
 