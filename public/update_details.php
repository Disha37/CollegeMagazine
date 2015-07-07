<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
if (isset($_POST['submit']))
{
	$name=mysql_prep($_POST["name"]);
	$email=mysql_prep($_POST["email"]);
	//$username=mysql_prep($_POST["username"]);
	$regno=mysql_prep($_POST["regno"]);
	$pass=mysql_prep($_POST["password"]);
	$phone=mysql_prep($_POST["phone"]);
	$gender=mysql_prep($_POST["gender"]);
	
	
if(!ctype_digit($regno))
{
$query = "INSERT INTO users( ";
	$query.="user_regno,user_name,user_email,user_gender,user_pass,user_phone";
	$query.=") VALUES (";
	$query.="'{$regno}','{$name}','{$email}','{$gender}','{$pass}','{$phone}'";
	$query.= ")";
}
else
{
$query = "INSERT INTO faculty( ";
	$query.="fac_regno,fac_name,fac_email,fac_gender,fac_pass,fac_phone";
	$query.=") VALUES (";
	$query.="'{$regno}','{$name}','{$email}','{$gender}','{$pass}','{$phone}'";
	$query.= ")";	
}		
		
	$result=mysqli_query($connection,$query);
}


?>

<?php if(isset($connection)) {mysqli_close($connection);} ?>
<?php redirect_to("signup.php");?>