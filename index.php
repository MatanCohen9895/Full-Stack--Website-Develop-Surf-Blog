<?php

session_start();
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
if(isset($_SESSION["user"])){
  Header("Location: blog.php");
}else{
$MySQLdb = new PDO("mysql:host=localhost;dbname=id18960860_blog_db", "id18960860_blog", "8a+1UL/$>oj@1#WY");
$MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['r_username']) && isset($_POST['r_password'])){
	
		$cursor = $MySQLdb->prepare("SELECT * FROM users WHERE username=:username");
		$cursor->execute( array(":username"=>$_POST["r_username"]) );
		if($cursor->rowCount()){
			$msg = "username or password already exist";
		}else{

			$cursor = $MySQLdb->prepare("INSERT INTO users (username, password) value (:username,:password)");
			$cursor->execute(array(":username"=>$_POST["r_username"], ":password"=>$_POST["r_password"]));
			$msg = "registered succesfully!!";
		}
}else if(isset($_POST['l_username']) && isset($_POST['l_password'])){
	
	 $cursor = $MySQLdb->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
	 $cursor->execute(array(":username"=>$_POST["l_username"], ":password"=>$_POST["l_password"]));
	 if($cursor->rowCount()){
		 $return_vaule=$cursor->fetch();
		 $_SESSION["user"]=$return_vaule["username"];
	     $_SESSION["user_id"]=$return_vaule["id"];
			Header("Location: blog.php");
		}else{

			$msg = "wrong username or password";
		}
	
}
}
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login/Regsiter</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well">
             <h1>Surfer Login/Register</h1>
				
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading">Login/Register

                </div>
                <div class="panel-body" id="login-panel">
				<img src="images/Surf-Blogs.jpeg" class="img-rounded" alt="opening_surf" style="width:100%">
				<br><br>
                    <form action="#" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="l_email" type="text" class="form-control" name="l_username" placeholder="username">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="l_password" type="password" class="form-control" name="l_password" placeholder="password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">login</button>
                        <a href="#" id="register"><i class="glyphicon glyphicon-info-sign"></i>register</a>
						
						<?php
							if (isset($msg))
                            {
                                echo "<div class='alert alert-default'><strong>Note:</strong>".$msg."</div>";
                            }
						?>
                    </form>
                </div>
                <div class="panel-body" id="register-panel" hidden>
				<img src="images/Surf-Blogs.jpeg" class="img-rounded" alt="opening_surf" style="width:100%">
				<br><br>
                    <form action="index.php" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="r_username" type="text" class="form-control" name="r_username" placeholder="username">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="r_password" type="password" class="form-control" name="r_password" placeholder="password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">register</button>
                        <a href="#" id="login"><i class="glyphicon glyphicon-info-sign"></i>login</a>
                    </form>
                </div>
            </div>
			<h3><span class="label label-default">Desinged by: Matan Cohen - 315823179  &&  Ori Ashkenazi - 205389414</span></h3>
			<h3><span class="label label-default">Phones: 0532840888  &&  0523878716</span></h3>
			<h3><span class="label label-default">Emails: matan.cohen9895@gmail.com &&  oriash94@gmail.com</span></h3>
			
        </div>
    </div>
</div>
<script>
$("#register").click(function () {
    $("#login-panel").fadeOut(1000);
    $("#register-panel").delay(1000).fadeIn(1000);
});
$("#login").click(function () {
    $("#register-panel").fadeOut(1000);
    $("#login-panel").delay(1000).fadeIn(1000);
});
</script>
</body>
</html>