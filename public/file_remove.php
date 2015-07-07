<?php require_once("../includes/db_connection.php");?>
<?php

$fileName = $_GET['name'];
$filePath = 'files_req/'.$fileName;
// remove file if it exists
if ( file_exists($filePath) ) {
    unlink($filePath);
	$query="DELETE from files WHERE file_name='{$fileName}'";
	$result=mysqli_query($connection,$query);
    header('Location:admin_page.php');
}
?>
