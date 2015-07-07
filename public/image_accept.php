<?php require_once("../includes/db_connection.php");?>
<?php

$fileName = $_GET['name'];

$filePath='images_req/'.$fileName;
if (file_exists($filePath) ) {
 $targetPath = 'images_disp/'.$fileName;
 rename($filePath,$targetPath);
  header('Location:admin_page.php');
}
    
?>