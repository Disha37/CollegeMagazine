<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['approve']))
{
	$id=mysql_prep($_POST["blog_id"]);
$query1 ="SELECT * FROM request_blog WHERE blogr_id={$id};";    
$result1=mysqli_query($connection,$query1);
$row=mysqli_fetch_assoc($result1);

$query2 = "INSERT INTO display_blog( ";
	$query2.="blogd_title,blogd_author,blogd_date,blogd_content";
	$query2.=") VALUES (";
	$query2.="'{$row["blogr_title"]}','{$row["blogr_author"]}','{$row["blogr_date"]}','{$row["blogr_content"]}'";
	$query2.= ")";
		
		
	$result2=mysqli_query($connection,$query2);
	
	
	

$query3="DELETE FROM request_blog WHERE blogr_id={$id};";
$result3=mysqli_query($connection,$query3);
}
?>

 <?php if(isset($connection)) {mysqli_close($connection);} ?>
<?php redirect_to("admin_page.php");?>