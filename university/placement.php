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
		
		$sn=0;
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
				</div></div>
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
				<br>
				<br>
				<br>
				
				<b class="w3-text-white"><a href="#">ALL MEMBER'S</a></b><br><br>
				<b class="w3-text-white"><a href="allstudent.php ">ALL STUDENT</a></b><br><br>
				<b class="w3-text-white"><a href="studentform.php">ADD STUDENT</a></b><br><br>
				<b class="w3-text-white"><a href="placement.php">add placement student</a></b><br><br>
				<b class="w3-text-white"><a href="allplacement.php">all placement student</a></b><br><br>
					
					
	</div>
			
			<div class="col-sm-10">
			<div class="row w3-text-pink well well-sm" align="center">
			<b><i>All <?=$dep?> section Employee :-</i></b>
			</div>
			
				<form enctype="multipart/form-data" action="addplacement.php" method="POST">
			
			 <?php /*Email<input type="email" name="email" required="required" /><br />*/ ?>
			<div class="row">
			<label class="col-sm-3">Choose photo:</label>
			<div class="col-sm-6">
			<input class="form-control" type="file" name="photo">
			</div>
			</div>
			<br>
			<div class="row">
					<label class="col-sm-3">Student Name:</label>
					<div class="col-sm-6">
						<input type="text" name="name" required="required" class="form-control">
				</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Father Name:</label>
					<div class="col-sm-6">
						<input type="text" name="fname" required="required" class="form-control">
				</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Company Name:</label>
					<div class="col-sm-6">
						<input type="text" name="cname" required="required" class="form-control">
				</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Package:</label>
					<div class="col-sm-6">
						<input type="text" name="pkg" required="required" class="form-control">
				</div>
				</div>
				<br>
			<div align="center">
			<button class="btn btn-success">Submit</button>
			</div>
			</form>
						 
			</div>
			</div>
	</div>		
	<?php
		}
	?>
   </body>
</html>