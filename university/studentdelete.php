<?php
include("database.php");
if(isset($_GET["name"])){
	$name=$_GET["name"];
}
if(isset($_GET["fname"])){
	$fname=$_GET["fname"];
}
mysql_query("delete from student where name='$name' AND fname='$fname' ");
header("location:allstudent.php?dlt=1");

?>