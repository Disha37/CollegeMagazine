<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<style>
div{
	display:inline;
}
body{
	background-color:black;
}
form{
	width:800px;
	margin:0 auto;
	background-color:lightblue;
	color:black;
	height:100%;
box-shadow:4px 5px 15px white;	
border:2px solid black;
	border-radius:10px;
}
.marg{
	margin-left:2px;
	margin-bottm:3px;
}
.warg{
	margin-left:10px;
}
label{
	margin-left:5px;
}
h4{
	text-align:center;
	color:white;
	font-size:24px;
	text-shadow: 5px black;
}
input,textarea{
	
	border:3px solid black;
	background-color:lightyellow;
}
</style>
</head>
<body>

<div id="display"> 
</div>
<br>
<div class="hep">
  <h1 style="color:white;"><i>Welcome User</i></h1>
  <h2 style="color:white"><i>want to write a blog?</i><h2>
 <form action="blog_update.php" method="post">
<h4><i>Blogs</i></h4>
 <label> Title:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type ="text" class="marg" name="blog_title"><br>
 <label>Author:</label>&nbsp;&nbsp;&nbsp;
<input type="text" class="marg" name="author_name"><br><br>
<label>Content:</label>&nbsp;&nbsp;
<input type="hidden" name="blog_date" value="<?php  echo date('Y-m-d');?>">
<textarea rows="10" cols="50" class="marg" name="blog"></textarea><br>
 <p>
 <input type="submit" class="warg" value="SEND REQUEST" name="post_b"></p>
 </form>

  <h2 style="color:white"><i>want to write a feedback?</i><h2>
 
 <form action="feed_update.php" method="post" enctype="multipart/form-data">
  <h4><i>Feedbacks</i></h4>
 <input type="hidden" name="feed_date" value="<?php  echo date('Y-m-d');?>">
 <textarea  class="warg" rows="10" cols="50" name="feed"></textarea>

 <p>
 <input type="submit"  class="warg "value="SEND REQUEST" name="post_f" ></p>
 </form>
   <h2 style="color:white"><i>want to upload file?"</i><h2>
 <form method="post" enctype="multipart/form-data" action="file_upload.php">
  <h4><i>File Upload</i></h4>
 <label>File:</label><input type="file" value="upload File" name="file"><br>
 <lbel>Author:</label><input type="text" name="author"><br><br>
<input type="hidden" name="date" value="<?php  echo date('Y-m-d');?>">
<label>Description:</label> <textarea rows="10" cols="10" name="desc"></textarea><br>
 <input type="submit" class="warg" name="submit" value="Submit file">
 
 </form>
 </div>
 
</body>
</html>