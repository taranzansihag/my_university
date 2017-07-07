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
		$("#sem").change(function(){
			var d=$("#sem").val();
			$.post(
			"sem1.php",
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
				
				<b class="w3-text-white"><a href="exam.php">ALL MEMBER'S</a></b><br><br>
				<b class="w3-text-white"><a href="timetable.php ">Add TIME TABLE</a></b><br><br>
				<b class="w3-text-white"><a href="result.php">ADD RESULT</a></b><br><br>
				<b class="w3-text-white"><a href="allresult.php">SHOW RESULT</a></b><br><br>
					
					
	</div>
			
			<div class="col-sm-10">
			<?php
			
				$roll=$_POST["roll"];
		
				include("database.php");
				$rs=mysql_query("select * from student where rollno='$roll' ");
				while($r=mysql_fetch_array($rs)){
			?>
			
				<div class="w3-card-12">
			<div class="panel panel-body">
					<form method="post" action="showresult.php?roll=<?=$roll?>">
						<div class="row">
						 <label class="col-sm-3">name:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[2]?>" name="name" placeholder="name" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Fname:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[3]?>" name="fname" placeholder="fname" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Year:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[11]?>" name="yr" placeholder="fname" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Degree:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[6]?>" name="dg" placeholder="fname" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Branch:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[7]?>" name="br" placeholder="fname" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Sem:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[12]?>" name="sem" placeholder="fname" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3" align="right">sub1:</label>
							   <div class="col-sm-3">
							<input class="form-control" type="text" name="sub1" placeholder="number" required="required">
							</div>
							<label class="col-sm-3" align="right">sub2:</label>
							   <div class="col-sm-3">
							<input class="form-control" type="text" name="sub2" placeholder="number" required="required">
							</div>
							</div>
							<br>
								
								<div class="row">
						 <label class="col-sm-3" align="right">sub3:</label>
							   <div class="col-sm-3">
							<input class="form-control" type="text" name="sub3" placeholder="number" required="required">
							</div>
							<label class="col-sm-3" align="right">sub4:</label>
							   <div class="col-sm-3">
							<input class="form-control" type="text" name="sub4" placeholder="number" required="required">
							</div>
							</div>
							<br>
							
								<div class="row">
						 <label class="col-sm-3" align="right">sub5:</label>
							   <div class="col-sm-3">
							<input class="form-control" type="text" name="sub5" placeholder="number" required="required">
							</div>
							<label class="col-sm-3" align="right">sub6:</label>
							   <div class="col-sm-3">
							<input class="form-control" type="text" name="sub6" placeholder="number" required="required">
							</div>
							</div>
							<br>
								
								<div class="row">
						 <label class="col-sm-3">Total:</label>
							   <div class="col-sm-6">
							<input class="form-control" type="text" name="total" placeholder="number" required="required">
							</div>
							</div>
							<br>
							<div align="center">
								<br><button class="btn btn-primary">Submit</button>
							</div>
					</form>
				</div>
				</div>
			</div>
				<?php  } ?>
			</div>
	</div>		
	<?php
		}
	?>
   </body>
</html>