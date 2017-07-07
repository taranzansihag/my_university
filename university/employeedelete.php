<?php
	include("database.php");
	if(isset($_GET["degree"])){
		$degree=$_GET["degree"];
		mysql_query("delete from employee where controller='$degree' ");
		header("location:allemployee.php?dlt=1");
	}
?>