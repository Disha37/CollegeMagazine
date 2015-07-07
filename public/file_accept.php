<?php require_once("../includes/db_connection.php");?>
<?php

$fileName = $_GET['name'];

$filePath='files_req/'.$fileName;
if (file_exists($filePath) ) {
 $targetPath = 'files_disp/'.$fileName;
 rename($filePath,$targetPath);
  header('Location:admin_page.php');
}
    
?>