<?php
session_start();
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
if(!isset($_SESSION["user"])){
	Header("Location: index.php");
}
$user=$_SESSION["user"];
$user_id=$_SESSION["user_id"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Surfers Chat</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	.center {
	text-align: center;
	}
	body {
	width: 100%;
	height: 100%;
	margin: auto;
	text-align: center;
	}

	#inp {
	text-align: center;
	margin: auto;
	}
  </style>
</head>
<body>

<!-- NavBar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Surfers Upload Box - Share your surf style !! </a>
        </div>
        <ul class="nav navbar-nav" style="float: right">
            <li><a href="#" id="logout"><span class="glyphicon glyphicon-repeat"></span> Return to Blog</a></li>
        </ul>
    </div>
</nav>


<!-- Youtube Video -->


<iframe width="800" height="600"
src="https://www.youtube.com/embed/b6hoBp7Hk-A?autoplay=1&mute=1">
</iframe>


<!-- Upload Photo Form -->

<div class="center" >
<h1>Upload and share your photo</h1>

	<label for="img">Select image:</label>
	<input type="file" id="inp" name="img" accept="image/*">

  <input id="upload_photo" type="submit">
<p><strong>Note:</strong> Only Photo can be upload to the server.</p>
</div>
 
<script>
	$("#page").slideDown("slow");
	
	$("#logout").click(function(){
		location.replace("blog.php")
			});
			
			
			
	$("#upload_photo").click(function(){
		$.post("api.php",{"action":"upload_photo","data":$("#inp").val()},function(data){
			if(data.success == "true"){
				location.reload();
			}
		});
	});
	
</script>

</body>
</html>
