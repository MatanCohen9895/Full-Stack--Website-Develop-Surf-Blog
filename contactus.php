<?php
session_start();
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
if(!isset($_SESSION["user"])){
	Header("Location: index.php");
}
$user=$_SESSION["user"];
$user_id=$_SESSION["user_id"];

if(isset($_POST['e_firstname'])){
 // Get Data 
 $name = strip_tags($_POST['e_firstname']);
 $email = strip_tags($_POST['e_mail']);
 $lastname = strip_tags($_POST['e_lastname']);
 $message = strip_tags($_POST['e_comment']);
 // Send Message
 mail( "oriash94@gmail.com,matan.cohen9895@gmail.com", "Contact Form Submission",
 "Name:". $name."\n Last Name:". $lastname."\nEmail:". $email."\nMessage:". $message."\n");
}

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
  </style>
</head>
<body>
<!-- NavBar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav" style="float: right">
            <li><a href="#" id="logout"><span class="glyphicon glyphicon-repeat"></span> Return to Blog</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well">
             <h1>Contact Us:</h1>			
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
				<form action="contactus.php" method="POST">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="e_firstname" type="text" class="form-control" name="e_firstname" placeholder="First Name">
				<input id="e_lastname" type="text" class="form-control" name="e_lastname" placeholder="Last Name">
				</div>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input id="e_mail" type="text" class="form-control" name="e_mail" placeholder="E-Mail">
				</div>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				<input id="e_comment" type="text" class="form-control" name="e_comment" placeholder="Comment" size="50">
				</div>
				<input type="submit" value="Send">
				<input type="reset" value="Reset">
				</form>

</div>
<script>
	$("#page").slideDown("slow");
	
	$("#logout").click(function(){
		location.replace("blog.php")
			});
		
</script>
</body>
</html>