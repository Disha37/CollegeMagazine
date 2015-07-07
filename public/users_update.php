<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['post_b']))
{
	$title=mysql_prep($_POST["blog_title"]);
    $author=mysql_prep($_POST["author_name"]);
	$date=$_POST["blog_date"];
	$content=mysql_prep($_POST["blog"]);


$query = "INSERT INTO request_blog( ";
	$query.="blogr_title,blogr_author,blogr_date,blogr_content";
	$query.=") VALUES (";
	$query.="'{$title}','{$author}','{$date}','{$content}'";
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