<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['word_b']))
{
	$title=mysql_prep($_POST["word_title"]);
    $content=mysql_prep($_POST["word_content"]);


$query = "INSERT INTO word_day( ";
	$query.="word_title,word_desc";
	$query.=") VALUES (";
	$query.="'{$title}','{$content}'";
	$query.= ")";
		
		
	$result=mysqli_query($connection,$query);
	
	
	
}


?>

 <?php if(isset($connection)) {mysqli_close($connection);} ?>
