<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>update</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
     
      margin: auto;
  }
 
  </style>
 
  
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
	<?php
		include("database.php");
		
		if(!isset($_COOKIE["user"])){
			header("location:login.php");
		}
		else{
			$dep=$_COOKIE["user"];
	?>
	 <div class="container-fluid">
            <div class="responsive">
			
			<div class="col-sm-12" style="height:25px; background-color:#B0C4DE">
				<div class="col-sm-11" align="center">
					<b><?=$dep?> section</b>
				</div>
				<div class="col-sm-1">
					<a href="logout.php?email=<?=$email?>"><b>Logout</b></a>
				
				</div>
                </div>
				
				
       <div class="col-sm-2" style="background-color:#A52A2A; height:640px;">
	   
	   
				<h1></h1>
				<div class="row">
				<div class="col-sm-4">
				<img src="images/jatlogo.png" class="img-responsive">
				</div>
				<div class="col-sm-8">
				<h4><b class="w3-text-white">UNIVERSITY</b></h4>
				</div>
				</div>
				
				
				<h1></h1><img src="images/line.png" class="img-responsive">
				
				
				<div class="row">
				<div class="col-sm-4">
				<h1></h1>
				<img src="images/profile.jpg" class="img-responsive img-circle">
				</div>
				<div class="col-sm-8">
				<h5><b class="w3-text-white">welcome<br>Teja Ram</b></h5>
				</div>
				</div>
				
				
				<div class="dropdown">
					<br><b class="glyphicon glyphicon-home w3-text-white" data-toggle="dropdown">&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
					<span class="caret"></span></b>
					<ul class="dropdown-menu">
					  <li><a href="#">HTML</a></li>
					  <li><a href="#">CSS</a></li>
					  <li><a href="#">JavaScript</a></li>
					</ul>
				  </div>
				  
				 
					<br><b class="w3-text-yellow" style="text-decoration:underline">&nbsp;NEW'S &nbsp;</b></a><br>
					<br><br><a href="news.php"><b class="w3-text-white">&nbsp;ALL News &nbsp;</b></a>
					<br><br><a href="newsform.php"><b class="w3-text-white">&nbsp;ADD News &nbsp;</b></a>
					<br><br><a href="sport.php"><b class="w3-text-white">&nbsp;ALL Sport News &nbsp;</b></a>
					<br><br><a href="sportform.php"><b class="w3-text-white">&nbsp;ADD Sport News &nbsp;</b></a>
					
					
				  
				
	</div>
			
			<div class="col-sm-10">
			<div class="w3-card-4">
			<div class="panel panel-body">
			<div class="well well-sm" align="center">
				<b class="w3-text-red">New's Detail</b>
			</div>
				<form enctype="multipart/form-data" action="addnews.php" method="POST">
				<br><label class="w3-text-green">Select News Type</label>
				<select class="form-control" name="ntype">
					<option>Select News Type</option>
					<option value="notification">Notification type</option>
					<option value="event">Event type</option>
					<option value="student">Student update</option>
					<option value="college">College type</option>
					
				</select>
				<br>
			<?php /*Email<input type="email" name="email" required="required" /><br />*/ ?>
			<label class="w3-text-green">Choose full news:</label>
			
			<input class="form-control" type="file" name="photo">
			
			<br>
				<label class="w3-text-green">NEW'S : </label><textarea name="news" row="3" coloum="100" required="required" class="form-control"></textarea><br>
				<button class="btn btn-primary">add news</button>
				</form>
			</div>
			</div></div>
			</div>
	</div>	
<?php
		}
?>	
   </body>
</html>