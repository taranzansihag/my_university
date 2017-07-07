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
				<b class="w3-text-white"><a href="empformA.php ">ADD MEMBER</a></b><br><br>
				<b class="w3-text-white"><a href="fees.php">FEES DETAIL</a></b><br><br>
					
					
	</div>
			
			<div class="col-sm-10">
			<br>
			<div class="row w3-text-pink well well-sm" align="center">
			<b><i> your fees submited :-</i></b>
			</div>
			<table class="table">
							<thead>
							  <tr>
								<th>SN</th>
								<th>SNAME</th>
								<th>FNAME</th>
								<th>MNAME</th>
							  </tr>
							</thead>
						<tbody>
				<?php
					include("database.php");
					
					$rs = mysql_query("select * from student where fees='yes' ");
					while($r=mysql_fetch_array($rs)){
						$sn+=1;
						$C1=$r[1];
						$C2=$r[2];
						$C3=$r[3];
						
				?>
						
							
							
							  <tr class="success">
								<td><?=$sn?></td>
								<td><?=$C1?></td>
								<td><?=$C2?></td>
								<td><?=$C3?></td>
									</tr>	
								
					
					
					<?php
					}
				?>
				</tbody>
						  </table>
						<br><br><br>  
				<div class="row w3-text-pink well well-sm" align="center">
			<b><i> your fees not submited :-</i></b>
			</div>
			<table class="table">
							<thead>
							  <tr>
								<th>SN</th>
								<th>SNAME</th>
								<th>FNAME</th>
								<th>MNAME</th>
							  </tr>
							</thead>
						<tbody>
				<?php
					include("database.php");
					
					$rs = mysql_query("select * from student where fees='no' ");
					while($r=mysql_fetch_array($rs)){
						$sn+=1;
						$C1=$r[1];
						$C2=$r[2];
						$C3=$r[3];
						
				?>
						
							
							
							  <tr class="success">
								<td><?=$sn?></td>
								<td><?=$C1?></td>
								<td><?=$C2?></td>
								<td><?=$C3?></td>
									</tr>	
								
					
					
					<?php
					}
				?>
				
				</tbody>
						  </table>
					<br>	
						
							<form method="post" action="feeschange.php">
				<div class="row well well-sm">
				<div class="row">
				<label class="col-sm-2">degree</label>
				<div class="col-sm-3">
				<select name="dg" class="form-control">
					<option>select degree</option>
					<?php
					include("database.php");
					$rs=mysql_query("select * from degree_section");
					while($r=mysql_fetch_array($rs)){
						?>
							<option value="<?=$r[1]?>"><?=$r[1]?></option>
						<?php
					}
					?>
				</select>
				</div>
				<label class="col-sm-2">year</label>
				<div class="col-sm-3">
				<input class="form-control" type="text" name="yr" required="required">
				</div>
				</div>
				<br>
				<div class="row">
				<label class="col-sm-2">sem</label>
				<div class="col-sm-3">
				<input class="form-control" type="text" name="sem" required="required">
				</div>
				<div class="col-sm-3" align="center">
				<button class="btn btn-primary">Delete fee detail</button>
				</div>
				</div>
				</div>
				</form>
						<br><br>


					
			</div>
			</div>
	</div>		
	<?php
		}
	?>
   </body>
</html>