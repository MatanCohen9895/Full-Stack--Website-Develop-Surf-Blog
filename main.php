<?php
session_start();
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
if(!isset($_SESSION["user"])){
	header("location:index.php");
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
</head>
<body onload="myFunction()">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Surfers Chat</a>
        </div>
        <ul class="nav navbar-nav" style="float: right">
            <li><a href="#" id="logout"><span class="glyphicon glyphicon-repeat"></span> Return to Blog</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row" id="page" hidden>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Account Info</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>
                                <kbd>username:</kbd>
                                <span style="float:right;">
                                    <?php echo $_SESSION["user"]; ?>
                                </span>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <kbd>ip address</kbd>
                                <span style="float:right;">
                                    <?php echo $_SERVER["REMOTE_ADDR"];?>
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chat History
                </div>
                <div class="panel-body">
                    <ul class="list-group" id="post_history">
					  
		
                    </ul>
                </div>
            </div>
                <div class="input-group">
                    <input id="msg" type="text" class="form-control" name="msg" placeholder="Write your message here...">
                    <span class="input-group-addon"><button id="send_post">Send</button></span>
                </div>
        </div>
    </div>
</div>
<script>

	$("#page").slideDown("slow");
	
	$("#logout").click(function(){
		location.replace("blog.php")
			});
	
	
		$("#send_post").click(function(){
		$.post("api.php",{"action":"new_post","data":$("#msg").val()},function(data){
				location.reload();
		});
	});
	
function myFunction(){
		$.post("api.php",{"action":"get_all_post"},function(data){
        $("#post_history").html(data);
		});
		
}
</script>
</body>
</html>
