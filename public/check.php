<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['submit']))
{
	$user=mysql_prep($_POST["regno"]);
   	$pass=mysql_prep($_POST["pass"]);
if(!ctype_digit($user))
{
   $query = "SELECT * from users WHERE user_regno = '{$user}' and user_pass  ='{$pass}'";
	$result=mysqli_query($connection,$query);
	$count=mysqli_num_rows($result);
	if($count==1)
		redirect_to("users_page.php");
	else
		echo "INVALID";
}

else
{
  $query = "SELECT * from faculty WHERE fac_regno ='{$user}' and fac_pass ='{$pass}'";
	$result=mysqli_query($connection,$query);
	$count=mysqli_num_rows($result);
	if($count==1)
		redirect_to("users_page.php");
	else
	echo "INVALID"	;
}
		
		

	
	}


?>

 <?php if(isset($connection)) {mysqli_close($connection);} ?>
 