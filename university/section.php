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
	?>
	 <div class="container-fluid">
            <div class="responsive">
			
			<div class="col-sm-12" style="height:25px; background-color:#B0C4DE">
				<div class="col-sm-11">
				</div>
				<div class="col-sm-1">
					<a href="logout.php"><b>Logout</b></a>
				
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
				
				
				<div class="dropdown">
					<br><b class="glyphicon glyphicon-home w3-text-white" data-toggle="dropdown">&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
					<span class="caret"></span></b>
					<ul class="dropdown-menu">
					  <li><a href="#">HTML</a></li>
					  <li><a href="#">CSS</a></li>
					  <li><a href="#">JavaScript</a></li>
					</ul>
				  </div>
				  
				  <div class="dropdown">
					<br><b class="glyphicon glyphicon-book w3-text-white" data-toggle="dropdown">&nbsp;DEPARTMENT &nbsp;
					<span class="caret"></span></b>
					<ul class="dropdown-menu">
					
					<?php
				
					include("database.php");
					$sn=0;
					$rs=mysql_query("select * from department");
					while($r=mysql_fetch_array($rs)){
					
					  ?>
					  	<li>
						<div class="col-sm-8">
						<a href="controller.php?cnt=<?=$r[1]?>"><b><?=$r[1]?></b></a> 
						</div>
						<div class="col-sm-4">
						<a href="vcdelete.php?dlt=<?=$r[0]?>"><img src="images/delete.png" width="20" height="20"></a>
						</div>
						</li> 
					 <?php
					 }
			
					 ?>
					 <br><br> <li><a href="vcform.php"><b>ADD NEW</a></b></li>
					</ul>
				  </div>
				  <div class="dropdown">
					<br><b class="glyphicon glyphicon-book w3-text-white" data-toggle="dropdown">&nbsp;NEWS&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span class="caret"></span></b>
					<ul class="dropdown-menu">
					  <li><a href="news.php"><b>All news</b></a></li>
					  <li><a href="newsform.php"><b>Add news</b></a></li>
					  
					</ul>
				  </div>
				
	</div>
			
			<div class="col-sm-10">
				<?php
					include("database.php");
					if(isset($_GET["dp"])){
						$dp=$_GET["dp"].'_section';
					$sn=0;
					$rs=mysql_query("select * from $dp");
					while($r=mysql_fetch_array($rs)){
						
					}
					}
				?>
			
			</div>
			
			</div>
	</div>	
<?php
		}
?>	
   </body>
</html>