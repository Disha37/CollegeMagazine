<?php require_once("../includes/db_connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<style>
.feedback,.blogs,.word,.news,.image,.file{
	width:800px;
	margin:0 auto;
	background-color:lightblue;
	color:black;
	box-shadow:4px 5px 15px white;
	box-radius:10px;
	height:100%;
}
body{
	background-color:black;
	color:white;
}
h4{
	text-align:center;
	color:white;
	font-size:24px;
	text-shadow: 5px black;
}
input,textarea{
	margin-top:5px;
	border:3px solid black;
	background-color:lightyellow;
}
</style>
</head>
<body>

<?php
$query ="SELECT * from feedback;";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
{  
echo '<div class="feedback">';
	while($row=mysqli_fetch_assoc($result))
	{
		echo "Feedback&nbsp&nbsp:" .$row["feed_content"]. "<br>"."Date :".$row["feed_date"] ."<br>";
	}
echo '</div>';
}
?>
<br>
<?php

$query2 ="SELECT blogr_id,blogr_title,blogr_author,blogr_date,blogr_content from request_blog;";
$result=mysqli_query($connection,$query2);
if(mysqli_num_rows($result)>0)
{
	echo '<div class="blogs">';
	while($row=mysqli_fetch_assoc($result))
	{
		echo "Title&nbsp&nbsp:" .$row["blogr_title"]."<br>Author&nbsp&nbsp:".$row["blogr_author"]."<br>Date&nbsp&nbsp:".$row["blogr_date"]."<br>Content&nbsp&nbsp:".$row["blogr_content"];
		
		?>
		<form action="approve.php"  method="post">
		
		<input type="hidden" name="blog_id" value="<?php echo $row["blogr_id"] ?>">
		<input type="submit" value="approve" name="approve" >
		</form>
		<form action="reject.php" method="post">
		
		<input type="hidden" name="blog_idr" value="<?php echo $row["blogr_id"] ?>">
		<input type="submit" value="reject" name="reject">
		
		</form>
		
		<?php
		echo '</div>';
	}
}

?>
<div class="image">
<?php
           
           $folder = "images_req";
           $results = scandir('images_req');
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
            if (is_file($folder . '/' . $result)) {
				$query3="SELECT * FROM images WHERE img_name='{$result}'";
				$result3=mysqli_query($connection,$query3);
				$row3=mysqli_fetch_assoc($result3);
                echo '              
                    <div >
                        <img src="'.$folder . '/' . $result.'" alt="...">
						<br>Author:'.$row3["img_author"].'
						<br>Description:'.$row3["img_desc"].'
						<br>Date:'.$row3["img_date"].'
                            <div class="caption">
                            <p><a href="image_remove.php?name='.$result.'"  role="button">Remove</a></p>
							 <p><a href="image_accept.php?name='.$result.'"  role="button">Approve</a></p>
                        </div>
                    
                </div>';
            }
           }
           ?>
		   </div>
           <div class="file">
                
           <?php
           
           $folder = "files_req";
           $results = scandir('files_req');
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
            if (is_file($folder . '/' . $result)) {
				$query4="SELECT * FROM files WHERE file_name='{$result}'";
				$result4=mysqli_query($connection,$query4);
				$row4=mysqli_fetch_assoc($result4);
                echo '              
                    <div >
			<a href="'.$folder . '/' . $result.'" target="_blank"> '.$result.' </a>
				  Author:'.$row4["file_author"].'
						Description:'.$row4["file_desc"].'
						Date:'.$row4["file_date"].'
                            <div class="caption">
                            <p><a href="file_remove.php?name='.$result.'"  role="button">Remove</a></p>
							 <p><a href="file_accept.php?name='.$result.'"  role="button">Approve</a></p>
                        </div>
                    
                </div>';
            }
           }
           ?>
		   </div>

<div class="news">
<h4><i>Post News</i></h4>
<form action="news_update.php" method="post">
Heading:&nbsp<input type="text" name="news_title"><br>
Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="news_date"><br>
Content:&nbsp<textarea rows="30" cols="20" name="news_content"></textarea><br>
<input type="submit" name="news_b"  value="submit"><br>
</form>
</div>


<div class="word">
<h4><i>Word of the Day </i></h4>
<form action="word_update.php" method="post"><br>
Word&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="word_title"><br>
Definition:&nbsp&nbsp<textarea rows="30" cols="20" name="word_content"></textarea><br>
<input type="submit" name="word_b"  value="submit">
</form>
</div>

		     
</body>
</html>
<?php if(isset($connection)) {mysqli_close($connection);} ?>