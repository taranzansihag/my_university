<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My university</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <style type="text/css">
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
     
      margin: auto;
  }
  #notifications,#comings,#students,#clgs{
	 display:none;
	 }
  </style>
<script src="university/jquery.js"></script>
  <script>
				function w3_open() {
					document.getElementById("mySidenav").style.height = "40%";
					document.getElementById("mySidenav").style.display = "block";
				}
				function w3_close() {
					document.getElementById("mySidenav").style.display = "none";
				}
				function change(v){
				  var s=v+"s";
				 document.getElementById("main").innerHTML=document.getElementById(s).innerHTML; 
				}	
				</script>
		
			
				
    </head>
	 <body class="w3-light-grey w3-content" style="max-width:1600px">

	<nav class="w3-downnav w3-blue" style="display:none" id="mySidenav">
		   <br>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">HOME</b><br>
						<a href="about.php">Research</a><br>
						<a href="gallery.php">Gallary</a><br>
						<a href="sport.php">Sports</a><br>
					</div>
					<div class="col-sm-1 w3-text-white">
						<b style="text-decoration:underline" align="center">ABOUT</b><br>
						<a href="about.php">Research</a><br>
						<a href="about.php">Mission</a><br>
						<a href="about.php">Objective</a><br>
						<a href="about.php">History</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">Courses & Colleges</b><br>
						<a href="college.php">Colleges</a><br>
						<a href="branch.php">Branches</a><br>
						<a href="course.php">Courses</a><br>
						<a href="syllabus.php">Syllabus</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">Examination</b><br>
						<a href="fees.php">Pay Fee Online</a><br>
						<a href="enrollment.php">Enrollment</a><br>
						<a href="time.php">Time Table</a><br>
						<a href="result.php">Result</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">Upcoming Activities</b><br>
						<a href="form.php">Conduct</a><br>
						<a href="form.php">Exam Form</a><br>
						<a href="form.php">Reevalution</a><br>
						<a href="form.php">Addmission Card</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">PLACEMENT</b><br>
						<a href="placement.php">placement record</a><br>
						<a href="company.php">companies</a><br>
						<a href="t&p.php">T&P</a><br>
						
					</div>
			
					<div class="col-sm-1" style="hieght:100px">
					
					<br><br>
				  <a href="#" onClick="w3_close()"><img src="university/images/delete.png" width="20px" class="img-responsive"></a>
					</div>
				</nav>
	
	
				
				
		<div class="container-fluid responsive">
		<div class="row" style="height:8px"></div>
		<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-4">
			<div class="col-sm-4">
				<img src="university/images/jatlogo.png" class="img-responsive" width="100px">
				</div>
				
				<h3><b class="w3-text-purple w3-text-shadow">My University</b></h3>
				<span class="w3-text-green">Higher Education for Dignity <br> and Self Relience</span>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3">
				<br>
				<div class="col-sm-3 w3-border-right">
				&nbsp;<i class="fa fa-photo w3-text-red" style="font-size:34px"></i>
				 <a href="gallery.php"> Gallery</a>
				</div>
				<div class="col-sm-3 w3-border-right">
				<i class="fa fa-phone w3-text-red" style="font-size:34px"></i>
			     <a href="contact.php"> Contact</a>
				</div>
				<div class="col-sm-3 w3-border-right">
				<li class="w3-dropdown-hover">
				<i class="fa fa-link w3-text-red" style="font-size:34px"></i>
				 <a>Link</a>
				 <div class="w3-dropdown-content w3-cyan w3-card-12">
				  <br>
				  <b><a href="gallery.php">Gallery</a></b>
				  <b><a href="result.php">Result</a></b>
				  <b><a href="fees.php">Pay fee</a></b>
				  <b><a href="syllabus.php">Syllabus</a></b>
				  <b><a href="time.php">Time Table</a></b>
				  <b><a href="problem.php">Help</a></b>
				  <br>
				</div>
				</li>
			
				</div>
				<div class="col-sm=3">
				 &nbsp;
				  <i class="fa fa-align-justify w3-text-red" onClick="w3_open()" style="font-size:34px"></i>
				  <span> &nbsp &nbsp;MENU</span>
				  
				</div>
				
		</div>	
			
			
		</div>
		
		
		<div class="row" style="height:8px"></div>
		<div class="row" style="height:8px">
		<img src="university/images/line2.png" class="img-responsive" width="100%">
		
		</div>
		<div class="w3-round-jumbo w3-teal w3-padding w3-margin-bottom" align="center">
		<b class="w3-text-shadow">RESULT</b></div>
	</div>
		
	
		<br><br>
		
		
		
		
		 
		
		  
		<div class="container responsive">
		<div class="row">
		<div class="well" align="center">
		 <?php
		 $roll=$_POST["roll"];
		 $rt=$_POST["result"];
		 $flag=0;
		 include("database.php");
		 $rs=mysql_query("select * from nresult where msg='$rt'");
		 while($r=mysql_fetch_array($rs)){
				$dg=$r[1];
				$yr=$r[2];
			}
			 $rs=mysql_query("select * from nsresult where msg='$rt' ");
		 while($r=mysql_fetch_array($rs)){
				$dg=$r[1];
				$yr=$r[3];
				$sem=$r[4];
			}
			 $rs=mysql_query("select * from nbresult where msg='$rt'");
		 while($r=mysql_fetch_array($rs)){
				$dg=$r[1];
				$yr=$r[3];
			}
			$rs=mysql_query("select * from student where rollno='$roll' and degree='$dg' and yr='$yr' ");
			while($r=mysql_fetch_array($rs)){
				$flag=1;
			}
			if($flag==0){
				//header("location:result.php?mismatch=1");
				echo '<br><b class="w3-text-red w3-text-shadow">'."invalid roll no".'</b>';
			}
			else{
			include("database.php");
			$rs=mysql_query("select * from student where rollno='$roll'");
			while($r=mysql_fetch_array($rs)){
				?>
				<div class="row" align="center">
					<h3 class="w3-text-green w3-text-shadow"><b><?=$rt?> result</b></h3>
		       </div>
			   <br>
				<div class="row">
				<div class="col-sm-6" align="center">
					<b>Name: </b> <?=$r[2]?>
				</div>	
				<div class="col-sm-6" align="center">
					<b>Fname: </b> <?=$r[3]?>
				</div>	
				</div>
				<br>
				<div class="row">
				<div class="col-sm-6" align="center">
					<b>Roll no: </b> <?=$roll?>
				</div>	
				<div class="col-sm-6" align="center">
					<b>College: </b> <?=$r[9]?>
				</div>	
				</div>
				<?php
			}
		 ?>
		 <br><br>
		 <table class="table">
		 <thead>
		 <tr class="w3-red">
			<th>SUBJECT</th>
			<th>MAXIMUM MARKS</th>
			<th>MINIMUM MARKS</th>
			<th>MARKS</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
			include("database.php");
			$rs1=mysql_query("select * from result where rollno='$roll' and flag=0");
			while($r1=mysql_fetch_array($rs1)){
				?>
					<tr>
					<td>Sub1</td>
					<td>100</td>
					<td>40</td>
					<td><?=$r1[7]?></td>
					</tr>
					<tr>
					<td>Sub2</td>
					<td>100</td>
					<td>40</td>
					<td><?=$r1[8]?></td>
					</tr>
					<tr>
					<td>Sub3</td>
					<td>100</td>
					<td>40</td>
					<td><?=$r1[9]?></td>
					</tr>
					<tr>
					<td>Sub4</td>
					<td>100</td>
					<td>40</td>
					<td><?=$r1[10]?></td>
					</tr>
					<tr>
					<td>Sub5</td>
					<td>100</td>
					<td>40</td>
					<td><?=$r1[11]?></td>
					</tr>
					<tr>
					<td>Sub6</td>
					<td>100</td>
					<td>40</td>
					<td><?=$r1[12]?></td>
					</tr>
					<tr align="center"><td><b class="w3-text-red">Total:</b></td><td> <?=$r1[13]?></td></tr>
				<?php
			}
				}
				
			
		 ?>
		 </tbody>
		 </table>
		</div>
		</div>
		</div>
		
		<br><br>
		 <div class="row w3-teal" style="height:300px">
		<div class="col-sm-4 w3-text-white w3-border-right w3-border-white" align="center">
			<h3><b class="w3-myfont" style="text-decoration:underline">All Department</b></h3>
			<?php
				include("database.php");
				$rs=mysql_query("select * from department");
				while($r=mysql_fetch_array($rs)){
					?>
					<br><b><?=$r[1]?> section</b><br>
					<?php
				}
			?>
			</div>
			<div class="col-sm-4 w3-text-white w3-border-right w3-border-white" align="center">
			<br>
				<img src="university/images/jatlogo.png" class="img-responsive" width="130px"><br>
				<b>My University <br>
				  Bikaner Rajasthan</b><br>
				  <b>contact no.9636631400</b>
				  <br><br>
			</div>
			<div class="col-sm-4 w3-text-white" align="center">
			<br><br><br>
			<h3 class="w3-text-shadow"><b class="fa fa-envelope"></b><b> Student Wel-Fare Center</b></h3><br><br>
				<b><a href="problem.php">Student problem</a></b><br><br>
				<b><a href="problem.php">view your responce</a></b>
			</div>
			
			
			
		</div>
		
		
		<div class="row w3-black" align="center" >
			<div class="row" style="height:10px"></div>
						<a href="myresume.php"><b class="w3-text-shadow w3-text-white"><i>copy right by: @ Teja Ram Choudhary</i></b></a>
					<div class="row" style="height:10px"></div>
				</div>
		
</body>
</html>
