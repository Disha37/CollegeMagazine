<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['reject']))
{
$id=mysql_prep($_POST["blog_idr"]);
$query="DELETE FROM request_blog WHERE blogr_id={$id};";
$result=mysqli_query($connection,$query);
}
?>

 <?php if(isset($connection)) {mysqli_close($connection);} ?>
<?php redirect_to("admin_page.php");?>