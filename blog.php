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
<title>Matan & Ori Surf-Blog</title>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey"> 
<!-- Nav Bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Surf Blog</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="main.php">Chat </a></li>
      <li><a href="PhotoGallery.php">Photo Gallery</a></li>
	  <li><a href="upload_page.php">Upload Photo</a></li>
	  <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a id="login_register"><span class="glyphicon glyphicon-user"></span>  Welcome <?php echo $_SESSION["user"]; ?> </a></li>
      <li><a href="index.php" id="logout" name="logut"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Matan & Ori Surf-Blog</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">Ori Ashkenazi and Matan Cohen</span></p>
</header>



<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="images/1.jpeg" alt="surflesson" style="width:100%">
    <div class="w3-container">
      <h3><b>Learning Surf Balance</b></h3>
      <h5>The perfect way to stand up on surfboard. </h5> <span class="w3-opacity">July 22, 2019, By Cam Hassard</span>
    </div>

    <div class="w3-container">
      <p>“Many times I see people in the water, and I think ‘you poor bastard, you’re doing it the hard way, and you’ll never get a wave today.’ The physics of surfing tell me you’re not surfing today.”</p>
	  <div class="input-group">
	               
                    <input id="msg1" type="text" class="form-control" name="msg1" placeholder="Write your message here...">
                    <span class="input-group-addon"><button id="send_comment1">Send</button></span>
			
       </div>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a class="w3-button w3-padding-large w3-white w3-border" href="https://www.redbull.com/au-en/position-yourself-and-stand-up-on-a-surfboard"><b>READ MORE »</b></a></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  
    <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="images/surfing-injuries-thesurferspot-com.jpg" alt="surflesson" style="width:100%">
    <div class="w3-container">
      <h3><b>Surf Injuries</b></h3>
      <h5>Common surfing injuries.</h5> <span class="w3-opacity">Reviewed on: 31-08-2014</span>
    </div>

    <div class="w3-container">
      <p>“Surfers most often sustain injuries to the leg, the head and face, the back, and the shoulder and arm.”</p>
	  <div class="input-group">
	               
                    <input id="msg3" type="text" class="form-control" name="msg3" placeholder="Write your message here...">
                    <span class="input-group-addon"><button id="send_comment3">Send</button></span>
			
       </div>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a class="w3-button w3-padding-large w3-white w3-border" href="https://www.betterhealth.vic.gov.au/health/healthyliving/surfing-preventing-injury"><b>READ MORE »</b></a></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/2.jpeg" alt="surfboardbarrel" style="width:100%">
    <div class="w3-container">
      <h3><b>Choose your preformance surfboard</b></h3>
      <h5>How to choose the optimal surfboard to you.</h5> <span class="w3-opacity">By SurfNation </span>
    </div>

    <div class="w3-container">
      <p>Choosing the right surfboard is one of the most, if not the most important purchasing decision you’ll make when it comes to an enjoyable wave ride.</p>
	   <div class="input-group">
	   
                   <input id="msg2" type="text" class="form-control" name="msg2" placeholder="Write your message here...">
                    <span class="input-group-addon"><button id="send_comment2">Send</button></span>
       </div>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a class="w3-button w3-padding-large w3-white w3-border" href="https://www.surfnation.com.au/pages/how-to-choose-the-right-surfboard"><b>READ MORE »</b></a></p>
        </div>
      </div>
	  
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/4.png" alt="oriicon" style="width:20%">
    <div class="w3-container w3-white">
      <h4><b>About Us</b></h4>
      <p>Matan and I have always loved the sea and the world of surfing, as part of an integrative workshop course in software we decided to combine the two mysteries of surfing and programming and open this blog in front of you.</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white" id="comments_history">
      
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Surf</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Teach</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Technique</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Relax</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Peacful Mind</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Life</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ocean</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Training</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Athlete</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Core</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Balance</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Swell</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!--Scripts -->
<script>

$("#page").slideDown("slow");
	
$("#logout").click(function(){
		$.post("api.php",{"action":"logout"},function(data){
			if(data.success == "true"){
			}
		});
	});
	
	
		$("#send_comment1").click(function(){
		$.post("api.php",{"action":"new_comment","data":$("#msg1").val()},function(data){
			location.reload();
		});
	});
	
		$("#send_comment2").click(function(){
		$.post("api.php",{"action":"new_comment","data":$("#msg2").val()},function(data){
				location.reload();
		});
	});
	
		$("#send_comment3").click(function(){
		$.post("api.php",{"action":"new_comment","data":$("#msg3").val()},function(data){
				location.reload();
		});
	});

		$.post("api.php",{"action":"get_all_comments"},function(data){
			$("#comments_history").html(data);
		});
		
		
		



</script>

</body>
</html>
