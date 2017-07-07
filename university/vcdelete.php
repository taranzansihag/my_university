<?php
    include("database.php");
	
	if(isset($_GET["dlt"])){
	$dlt=$_GET["dlt"];
	mysql_query("delete from department where email='$dlt' ");
	mysql_query("update employee set parent='child',department='employee', password='0' where controller='$dlt' ");
	header("location:vcdep.php?dlt=1");
	}
?>