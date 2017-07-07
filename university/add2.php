<?php
$dg=$_POST["type"]; // retrieve cookie ( email id)
//$email=$_POST["email"];
$img=$dg.".jpg";  // teja@tzn.com.jpg
$target = "gallery/";  //  pro/teja@tzn.com.jpg
$target = $target . $img;  //  pro/teja@tzn.com.jpg
//$pic=($_FILES['photo']['name']);
$size=($_FILES['photo']['size']);
	$sn=0;
	
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
	include("database.php");
	
	$rs=mysql_query("select max(sn) from gallery");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
			$sn=$sn+1;
			mysql_query("insert into gallery values('$sn','$dg')");
			
	header("location:gellaryform.php?succ=1");
	} 
else 
{ 
	 header("location:gellaryform.php?dlt=1");
} 
	

?> 