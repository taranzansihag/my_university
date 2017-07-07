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
				
				<b class="w3-text-white"><a href="degree.php">ALL MEMBER'S</a></b><br><br>
				<b class="w3-text-white"><a href="degree_section.php ">ALL DEGREE</a></b><br><br>
				<b class="w3-text-white"><a href="dgadd.php">ADD DEGREE</a></b><br><br>
				<b class="w3-text-white"><a href="syllabus.php">SYLLABUS</a></b><br><br>
				<b class="w3-text-white"><a href="branchform.php">ADD BRANCH</a></b><br><br>
				<b class="w3-text-white"><a href="allbranchform.php">ALL BRANCH</a></b><br><br>
					
					
	</div>
			
			<div class="col-sm-10">
			<div class="row w3-text-pink well well-sm" align="center">
			<b><i>All <?=$dep?> section Employee :-</i></b>
			</div>
			<table class="table">
							<thead>
							  <tr>
								<th>SN</th>
								<th>CONTROLLER</th>
								<th>EMAIL</th>
								<th>JOINING DATE</th>
								<th>CONTACT NO</th>
								<th>PARENT</th>
								<th>DELETE</th>
							  </tr>
							</thead>
						<tbody>
				<?php
					include("database.php");
					
					$rs = mysql_query("select * from employee where department='$dep' ");
					while($r=mysql_fetch_array($rs)){
						$sn+=1;
						$C1=$r[1];
						$C2=$r[2];
						$C5=$r[5];
						$C3=$r[6];
						$C4=$r[4];
						$C5=$r[8];
						if($C5!=1){
				?>
						
							
							
							  <tr class="success">
								<td><?=$sn?></td>
								<td><?=$C1?></td>
								<td><?=$C2?></td>
								<td><?=$C3?></td>
								<td><?=$C5?></td>
								<td><?=$C4?></td>
								
								<td><a href="empdelete.php?email=<?=$C2?>"><img src="images/delete.png" width="20" height="20"></a></td>
							</tr>	
								
							
							 
							
					
					<?php
					}
					
					}
				?>
				</tbody>
						  </table>
						
			<br><br><br><br>
			<div class="col-sm-6">
			<img src="images/line.png" class="img-responsive">
			</div>
			<div class="col-sm-6">
			<img src="images/line.png" class="img-responsive">
			</div>
			<br><br><br><br><br><br>
			      <table class="table">
							<thead>
							  <tr>
								<th></th>
								<th>CONTROLLER</th>
								
								<th>PASSWORD</th>
								<th>CONTACT</th>
								
							  </tr>
							</thead>
						<tbody>
						 <tr class="success">
						 <form method="post" action="empadd.php">
								<td></td>
								<td><select name="controller" class="form-control" id="email1">
									<option>select controller</option>
								<?php
									include("database.php");
									$rs = mysql_query("select * from employee");
									while($r=mysql_fetch_array($rs)){
										if($r[4]!='parent'){
																		
								?>
									<option value="<?=$r[1]?>"><?=$r[1]?></option>
									<?php } 
									}
									?>	
								</td>
								<td><input type="password" name="pass"></td>
								<td><input type="text" name="contact"></td>
								<td><button class="btn btn-primary">ADD</button></td>
								<td></td>
							  </tr>
						</form>	 
					</tbody>
				</table>
			
			
			</div>
			
			</div>
	</div>
<?php
		}
?>	
   </body>
</html>