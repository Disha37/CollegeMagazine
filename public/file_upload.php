<?php require_once("../includes/db_connection.php");?>
 <?php require_once("../includes/inc_func.php");?>
<?php
        //turn on php error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
            $name     = $_FILES['file']['name'];
            $tmpName  = $_FILES['file']['tmp_name'];
            $error    = $_FILES['file']['error'];
            $size     = $_FILES['file']['size'];
            $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));
			$title=$name;
			$author=$_POST["author"];
			$date=$_POST["date"];
			$desc=$_POST["desc"];
           
            switch ($error) {
                case UPLOAD_ERR_OK: 
				  if ( in_array($ext, array('jpg','jpeg','png','gif')) ) 
									{
									$querycheck="SELECT img_name from images WHERE img_name='{$title}'";
									$result_chk=mysqli_query($connection,$querycheck);
									$count_chk=mysqli_num_rows($result_chk);
									if(($count_chk)>0)
									{
									$response = "Change file name(Already existing )";
									}
									else if(strlen($title)>20)
									{
									$response = "Change file name( Cannot be More than 20 characters)";
									}
									else
									{
										
                          $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'images_req' . DIRECTORY_SEPARATOR. $name;
						
                  $query = "INSERT INTO images( ";
	       $query.="img_name,img_author,img_date,img_desc";
	$query.=") VALUES (";
	$query.="'{$title}','{$author}','{$date}','{$desc}'";
	$query.= ")";
	 move_uploaded_file($tmpName,$targetPath);
						$result=mysqli_query($connection,$query);
                        redirect_to("users_page.php");
		
									}}
					
                        else
						{
							$querycheck="SELECT file_name from files WHERE file_name='{$title}'";
									$result_chk=mysqli_query($connection,$querycheck);
									$count_chk=mysqli_num_rows($result_chk);
									if(($count_chk)>0)
									{
									$response = "Change file name(Already existing )";
									}
									else if(strlen($title)>20)
									{
									$response = "Change file name( Cannot be More than 20 characters)";
									}
									else
									{
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'files_req' . DIRECTORY_SEPARATOR. $name;
						
$query = "INSERT INTO files( ";
	$query.="file_name,file_author,file_date,file_desc";
	$query.=") VALUES (";
	$query.="'{$title}','{$author}','{$date}','{$desc}'";
	$query.= ")";
		 move_uploaded_file($tmpName,$targetPath);
						$result=mysqli_query($connection,$query);
                        redirect_to("users_page.php");
		
	
	
						}
						}
                        break;
			
                case UPLOAD_ERR_INI_SIZE:
                    $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $response = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $response = 'The uploaded file was only partially uploaded.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $response = 'No file was uploaded.';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $response = 'File upload stopped by extension. Introduced in PHP 5.2.0.';
                    break;
                default:
                    $response = 'Unknown error';
                break;
            }
 
            echo $response;
        }
        ?>
