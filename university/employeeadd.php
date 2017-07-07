<?php
	include("database.php");
	$sn=0;
	$cnt=$_POST["cnt"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$department=$_POST["department"];
	$date=$_POST["date"];
	$rs=mysql_query("select max(sn) from employee");
	while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
				$sn=$sn+1;

			  // retrieve cookie ( email id)
			//$email=$_POST["email"];
			$img=$cnt.".jpg";  // teja@tzn.com.jpg
			$target = "employee/";  //  pro/teja@tzn.com.jpg
			$target = $target . $img;  //  pro/teja@tzn.com.jpg
			//$pic=($_FILES['photo']['name']);
			$size=($_FILES['photo']['size']);
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			 { 
					mysql_query("insert into employee values ('$sn','$cnt','$email',0,'child','$contact','$date','$department',0) ");
					header("location:allemployee.php?succ=1");
				} 
			else 
			{ 
				 header("location:emform.php?dlt=1");
			} 


				

?>
