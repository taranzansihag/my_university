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
  
 
  </style>
 
		<script src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#email").change(function(){
			var d=$("#email").val();
			$.post(
			"email.php",
			{wk:d},
			function(data){
				$("#show").html(data);
			});
		});
	});
	</script>
 
  
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
	<?php
		include("database.php");
		
		if(!isset($_COOKIE["user"])){
			header("location:login.php");
		}
		else{
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
			<div class="col-sm-6">
			<div class="w3-card-12">
			<div class="panel panel-body">
			<div class="well well-sm" align="center">
				<b class="w3-text-red">Department Detail</b>
			</div>
			
			
			   <form method="post" action="vcadd.php?email=<?=$email?>">
				Department name: <input class="form-control" type="text" name="dp" required="required"><br>
				controller:
				<select name="cnt" class="form-control" id="email">
				<option>Select employee</option>
				<?php
					include("database.php");
					$rs = mysql_query("select * from employee");

					while($r=mysql_fetch_array($rs)){
						if($r[4]!='parent'){
						?>
				 
				 <option value="<?=$r[1]?>"><?=$r[1]?></option>
				 
					<?php 
					}
					}
					?>
					</select>
				<div id="show"></div><br>
				password: <input class="form-control" type="password" name="pass" required="required"><br>
				contact: <input class="form-control" type="text" name="contact" required="required"><br>
				<button class="btn btn-primary">ADD</button>
		   </form>
		   </div>
		     <div class="col-sm-6">
			 </div>
			</div>
			</div></div>
			
			</div>
	</div>		
	<?php
		}
	?>
   </body>
</html>