<?php require_once("../includes/db_connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
.star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 150px;
  height: 30px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
#searchbox
{
width:250px;
border:solid 1px #000;
padding:3px;
}
#display
{
width:250px;
display:none;
float:right; margin-right:30px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}


</style>
</head>

<body>

<div style=" width:300px; float:right; margin-right:30px" align="right">
<input type="text" name="searchbox" class="search" id="searchbox"  /><br />
<select name="select" id="select">
<option value="a">Article</option>
<option value="b">Blogs</option>
<option value="i">Images</option>
</select>
<div id="display">
</div>
</div>
<div id="archives">
<a href="file_archive.php" target="_blank">File Gallery</a>
<a href="image_archive.php" target="_blank">Image Gallery</a>
<a href="blog_archive.php" target="_blank">Blog Gallery</a>
</div>
<div id="blogs">
<?php
$query="SELECT * FROM display_blog ORDER BY blogd_id DESC LIMIT 5;";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
    
	{ 
	
		while($row=mysqli_fetch_assoc($result))
		{
		echo "<br>title".$row["blogd_title"]  . "<br>content". $row["blogd_content"]."<br>date".$row["blogd_date"]."<br>author".$row["blogd_author"]  ;
		echo '<br>Average rating<br> '.$row["point_avg"].'<br>users '.$row["users"].'	
					<form action="rate.php" method="post">
						<input type="hidden" name="id" value="'.$row["blogd_id"].'">
						<span class="star-rating">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>
						<input type="submit" value="review blog" name="rev_b">
						
						</form>';
						
		}
		
	}
?>
</div>
<div id="news">

<?php
 $query1="SELECT * FROM news ORDER BY news_id DESC LIMIT 5;";
$result1=mysqli_query($connection,$query1);
if(mysqli_num_rows($result1)>0)
    
	{ 
	
		while($row1=mysqli_fetch_assoc($result1))
		{
		echo "<br>title".$row1["news_title"]  . "<br>description". $row1["news_content"]."<br>date".$row1["news_date"]  ;
		}
		
	}



?>
</div>
<div id="word">
<?php
$query2="SELECT * FROM word_day WHERE word_id =(SELECT MAX(word_id));";
$result2=mysqli_query($connection,$query2);
if(mysqli_num_rows($result2)>0)
    
	{
		$row2=mysqli_fetch_assoc($result2);
		echo "title".$row2["word_title"]  . "<br>description".$row2["word_desc"] ;
		
	}

?>
</div>

<div id="images">
<?php
           
           $folder = "images_disp";
           $results = scandir('images_disp');
		   $query3="SELECT * FROM images ORDER BY img_id DESC LIMIT 5";
		   $result3=mysqli_query($connection,$query3);
		  
		   
		           
		             
					 while($row3=mysqli_fetch_assoc($result3))
			  {
				  foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
            if (is_file($folder . '/' . $result)  && ($result==$row3["img_name"])){
				      

                echo '              
                    <div >
                        <img src="'.$folder . '/' . $result.'" alt="..." width="200px" height="200px"> 
						Author:'.$row3["img_author"].'
						Description:'.$row3["img_desc"].
						'Date:'.$row3["img_date"].
						'Average rating'.$row3["point_avg"].'<br>users '.$row3["users"].'
						<form action="rate.php" method="post">
						<input type="hidden" name="id" value="'.$row3["img_id"].'">
						<span class="star-rating">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>
						<input type="submit" value="review image" name="rev_i">
						
						</form>
						
						
                                               
                </div>';
            }
           }
			  }
           ?>
<?php
           
           $folder = "files_disp";
           $results = scandir('files_disp');
           $query4="SELECT * FROM files ORDER BY file_id DESC LIMIT 5 ";
			$result4=mysqli_query($connection,$query4);
				   
					 while($row4=mysqli_fetch_assoc($result4))
			  {
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
                         
            if (is_file($folder . '/' . $result) && ($result==$row4["file_name"])) {
				
                echo '              
                    <div >
			  <a href="'.$folder . '/' . $result.'" target="_blank">'.$result.'</a>
			  Author:'.$row4["file_author"].'
						Description:'.$row4["file_desc"].
						'Date:'.$row4["file_date"].
						'Average rating	'.$row4["point_avg"].'<br>users '.$row4["users"].'
							<form action="rate.php" method="post">
						<input type="hidden" name="id" value="'.$row4["file_id"].'">
						<span class="star-rating">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>
						<input type="submit" value="review file" name="rev_a">
						
						</form>
						
                                             
                </div>';
            }
           }
			  }
           ?>	   
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){


$("#searchbox").keyup(function() 
{
var searchbox = $(this).val();
var select=$("#select").val();

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: {searchword:searchbox,select :select},
cache: false,
success: function(html)
{

$("#display").html(html).show();
		}
});
}    
});
});
jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>

 </body>
</html>