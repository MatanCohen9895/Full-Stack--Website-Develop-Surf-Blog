	<?php
    session_start();
    error_reporting(0);
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    if(!isset($_SESSION["user"])){
    header("location:index.php");
    }
    $user=$_SESSION["user"];
    $user_id=$_SESSION["user_id"];
    $MySQLdb = new PDO("mysql:host=localhost;dbname=id18960860_blog_db", "id18960860_blog", "8a+1UL/$>oj@1#WY");
	$MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$action=$_POST["action"];
	
	if(isset($_POST["data"])){
		$data=$_POST["data"];
	}
	
	if(isset($_POST["user_id"])){
		$user_id=$_POST["user_id"];
	}
	if(isset($_POST["user"])){
		$user=$_POST["user"];
	}
	switch($action){
		
		case "new_post":
			$cursor = $MySQLdb->prepare("INSERT INTO posts (user_id,post_data, username) value (:id,:data,:username)");
			$cursor->execute(array(":id"=>$user_id,":data"=>$data,":username"=>$user));
			echo "true";
			break;
			
		case "upload_photo":
		$cursor = $MySQLdb->prepare("INSERT INTO uploads (username,photo) value (:username,:data)");
		$cursor->execute(array(":username"=>$user,":data"=>$data));
		echo "true";
		break;
			
		case "new_comment":
			$cursor = $MySQLdb->prepare("INSERT INTO comments (user_id,post_data, username) value (:id,:data,:username)");
			$cursor->execute(array(":id"=>$user_id,":data"=>$data,":username"=>$user));
			echo "true";
			break;
			
			
		case "get_all_post":
			$cursor = $MySQLdb->prepare("SELECT * FROM posts");
			$cursor->execute();
			$retval="";
			foreach($cursor->fetchAll() as $row){
				if($row["user_id"] == $user_id){
					$retval= $retval ."<div class='media'><div class='media-body text-right'><h4 class='media-heading'>".$user."</h4><p>".$row['post_data']."</p></div><div class='media-right'><img src='images/pro1.png' class='media-object' style='width:60px'></div></div>";					
				}else{
					$retval=$retval . "<div class='media'> <div class='media-left'> <img src='images/pro2.png' class='media-object' style='width:60px'></div><div class='media-body'><h4 class='media-heading'>".$row['username']."</h4><p>".$row['post_data']."</p></div></div>";
				}
			}
			echo $retval;
			die();
			break;
			
		case "get_all_comments":
			$cursor = $MySQLdb->prepare("SELECT * FROM comments");
			$cursor->execute();
			$retval="";
			$counter=0;
			foreach($cursor->fetchAll() as $row){
		    //limit the popular posts to the first 4 posts are posted.
			if($counter < 4){
			$retval=$retval . "<div class='media'> <div class='media-left'> <img src='images/5.png' class='media-object' style='width:60px'></div><div class='media-body'><h4 class='media-heading'>".$row['username']."</h4><p>".$row['post_data']."</p></div></div>";
			}
			$counter++;
			}
			echo $retval;
			die();
			break;
		
		case "logout":
			session_destroy();
			echo "true";
			break;
			
		default:
			echo "false";
			die();
		
	}
	?>
   