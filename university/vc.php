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
					<b>vice chancellor</b>
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
				  
				 
					<br><a href="vcdep.php"><b class=" w3-text-white">ALL DEPARTMENT</b></a>
					<br><br><a href="vcform.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; Add Department</b></a>
					<br><br><a href="emform.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; Add Employee</b></a>
					<br><br><a href="allemployee.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; All Employee</b></a>
					<br><br><a href="collegeform.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; Add college</b></a>
					<br><br><a href="allcollege.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; All college</b></a>
					<br><br><a href="gellaryform.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; Add gallery</b></a>
				  <br><br><a href="companyform.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; Add company</b></a>
					<br><br><a href="allcompany.php" style="text-decoration:none"><b class="w3-text-white">&nbsp; All company</b></a>
				  
				
	</div>
			
			<div class="col-sm-10">
			
			</div>
			
			</div>
	</div>	

			<?php
		}
			?>
		

   </body>
</html>