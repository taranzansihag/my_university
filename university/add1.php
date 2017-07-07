<?php
$dg=$_POST["dg"];
$br=$_POST["br"];  // retrieve cookie ( email id)
//$email=$_POST["email"];
$img=$dg.$br.".pdf";  // teja@tzn.com.jpg
$target = "time/";  //  pro/teja@tzn.com.jpg
$target = $target . $img;  //  pro/teja@tzn.com.jpg
//$pic=($_FILES['photo']['name']);
$size=($_FILES['photo']['size']);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
	header("location:timetable.php?succ=1");
	} 
else 
{ 
	 header("location:timetable.php?dlt=1");
} 
?> 