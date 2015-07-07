<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php 
$arr=array();
if (isset($_POST['searchword']))
	 
 
	{
		$search=mysql_prep($_POST['searchword']);
		$select=mysql_prep($_POST['select']);
		if($select=='b')
		{
		$query='SELECT * FROM display_blog WHERE blogd_title LIKE "%'.$search.'%"';	
		$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result))
{
while($row=mysqli_fetch_assoc($result))
{
	$id=$row["blogd_id"];
	$title=$row["blogd_title"];
	 echo '<div class="display_box" align="left">&nbsp<a href="urldisplay.php?blog_id='.$id.'" target ="_blank">'.$title.'</a></div>';
	}
}
		}
		else if($select=='i')
		{
			$query='SELECT * FROM images WHERE img_name LIKE "%'.$search.'%"';	
		$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result))
{
while($row=mysqli_fetch_assoc($result))
    {
	$id=$row["img_id"];
	$title=$row["img_name"];
	 echo '<div class="display_box" align="left">&nbsp<a href="urldisplay.php?img_id='.$id.'" target="_blank">'.$title.'</a></div>';
	}
}
    }
else if($select=='a')
	{
	$query='SELECT * FROM files WHERE file_name LIKE "%'.$search.'%"';	
	$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result))
    {
while($row=mysqli_fetch_assoc($result))
    {
	$id=$row["file_id"];
	$title=$row["file_name"];
	 echo '<div class="display_box" align="left">&nbsp<a href="urldisplay.php?file_id='.$id.'" target="_blank">'.$title.'</a></div>';
	}
	}
	}
	}

?>



		
		