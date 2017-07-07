<html>
<head>
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
<br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
   if(isset($_GET["err"])){
	   echo '<b class="w3-text-red">'."invalid email,password an department".'</b>';
	   
   }
?>
	<div class="container">
	<br><br>
	<form class="tabel" method="post" action="check.php">
		<div class="row">
		<label class="col-sm-3">Email Id:</label>
		<div class="col-sm-7">
			<input type="text" name="email" placeholder="email id" required="required" class="form-control w3-input w3-animate-input" style="width:50%">
		</div>
			</div><br>
			<div class="row">
		<label class="col-sm-3">Password:</label>
		<div class="col-sm-7">
			<input type="password" name="pass" placeholder="password" required="required" class="form-control w3-input w3-animate-input" style="width:50%">
		</div>
			</div><br>
			<div class="row">
			<label class="col-sm-3">Department:</label>
			<div class="col-sm-7">
		<select name="department" class="form-control">
				<option>Select Department</option>
				<option value="vc">Vice Chancellor</option>
				<option value="news">NEW'S</option>
			<?php
				include("database.php");
				$rs = mysql_query("select * from department");
				while($r=mysql_fetch_array($rs)){
			?>		
					<option value="<?=$r[1]?>"><?=$r[1]?> section</option>
			<?php	
				}
			?>
		</select>
		</div>
		</div><br>
		<div clas="col-sm-4"></div>
		<div clas="col-sm-8" align="center">
			<br><button class="btn btn-success">Login</button>
			</div>
	</form>
</body>
<html>