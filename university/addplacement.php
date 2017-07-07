<?php
$name=$_POST["name"];
$fname=$_POST["fname"];
$cname=$_POST["cname"];
$pkg=$_POST["pkg"]; // retrieve cookie ( email id)
//$email=$_POST["email"];
$img=$name.".jpg";  // teja@tzn.com.jpg
$target = "stplacement/";  //  pro/teja@tzn.com.jpg
$target = $target . $img;  //  pro/teja@tzn.com.jpg
//$pic=($_FILES['photo']['name']);
$size=($_FILES['photo']['size']);
	$sn=0;
	
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
	include("database.php");
	
	$rs=mysql_query("select max(sn) from st_placement");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
			$sn=$sn+1;
			mysql_query("insert into st_placement values('$sn','$name','$fname','$cname','$pkg')");
			
	header("location:allplacement.php?succ=1");
	} 
else 
{ 
	 header("location:placement.php?dlt=1");
} 
	

?> 