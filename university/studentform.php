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
 	<script src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#deg").change(function(){
			var d=$("#deg").val();
			$.post(
			"sm.php",
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
			 <br>
			 <div class="w3-card-12">
			 <div class="panel panel-body">
			 <div class="well well-sm" align="center">
				<b class="w3-text-red">Student Detail</b>
			</div>
			<?php
				if(isset($_GET["match"])){
					echo '<b class="w3-text-red" align="center">'."this roll no is allready  available plz choos other roll no".'</b>';
				}
			?>
			<form method="post" action="addstudent.php">
			
				<br>
				<div class="row">
					<label class="col-sm-3">Roll no</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="roll" placeholder="13ebxA008" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">NAME</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="name" placeholder="full name" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">FNAME</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="fname" placeholder="father name" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">MNAME</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="mname" placeholder="mother name" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">DOB</label>
					<div class="col-sm-6">
						<input class="form-control" type="date" name="dob" placeholder="13ebxA008" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">DEGREE</label>
					 <div class="col-sm-6">
					 <select name="degree" class="form-control" id="deg">
					 <option>select degree</option>
					<?php
					 include("database.php");
					 $rs = mysql_query("select * from degree_section");
					 while($r=mysql_fetch_array($rs)){
						 
						 ?>
						 <option value="<?=$r[1]?>"><?=$r[1]?></option>
					<?php
					 }
					?>	 
					</select>
					</div>
				</div>
				<br>
				
				<div id="show"></div>
				<div class="row">
					<label class="col-sm-3">CONTACT</label>
					<div class="col-sm-6">
						<input  class="form-control" type="text" name="contact" placeholder="1234567890" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">COLLEGE</label>
					 <div class="col-sm-6">
					 <select name="college" class="form-control">
					 <option>select college</option>
					<?php
					 include("database.php");
					 $rs2 = mysql_query("select * from college");
					 while($r2=mysql_fetch_array($rs2)){
						 $C1=$r2[1];
						 
						 ?>
						 <option value="<?=$C1?>"><?=$C1?></option>
					<?php
					 }
					?>	 
					</select>
					</div>
				</div>
				<br>
				<div align="center">
				<button class="btn btn-success">SUBMIT</button>
				</div>
			</form>
			</div></div>
			</div>
			</div>
	</div>		
	<?php
		}
	?>
   </body>
</html>