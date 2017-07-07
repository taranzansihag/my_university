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
			
			<?php
				if(isset($_GET["succ"])){
				
				echo '<b class="w3-text-red" style="text-decoration:underline">'."Successfully Added".'</b><br>';
				}
				if(isset($_GET["dlt"])){
					echo '<b class="w3-text-red" style="text-decoration:underline">'."Successfully Deleted".'</b><br>';
				}
			?>
				<table class="table">
							<thead>
							  <tr>
								<th>SN</th>
								<th>ROLL NO</th>
								<th>SNAME</th>
								<th>FNAME</th>
								<th>MNAME</th>
								<th>DOB</th>
								<th>DEGREE</th>
								<th>BRANCH</th>
								<th>CONTACT</th>
								<th>COLLEGE</th>
								<th>DELETE</th>
							  </tr>
							</thead>
						<tbody>
				<?php
					include("database.php");
					$sn=0;
					$rs = mysql_query("select * from student");
					while($r=mysql_fetch_array($rs)){
						
						$sn+=1;
						$C1=$r[1];
						$C2=$r[2];
						$C3=$r[3];
						$C4=$r[4];
						$C5=$r[5];
						$C6=$r[6];
						$C7=$r[7];
						$C8=$r[8];
						$C9=$r[9];
						
				?>
						
							
							
							  <tr class="success">
								<td><?=$sn?></td>
								<td><?=$C1?></td>
								<td><?=$C2?></td>
								<td><?=$C3?></td>
								<td><?=$C4?></td>
								<td><?=$C5?></td>
								<td><?=$C6?></td>
								<td><?=$C7?></td>
								<td><?=$C8?></td>
								<td><?=$C9?></td>
								<td><a href="studentdelete.php?name=<?=$C1?>&fname=<?=$C2?>"><img src="images/delete.png" width="20" height="20"></a></td>
							</tr>	
								
							
							 
							
					
					<?php
					
						}
				
				?>
				</tbody>
						  </table>
						<button class="btn btn-success"><a href="studentform.php">Add Student</a></button> 
			
						 
			</div>
			</div>
	</div>		
	<?php
		}
	?>
   </body>
</html>