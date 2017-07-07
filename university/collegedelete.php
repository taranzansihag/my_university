<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from college where name='$name' ");
	header("location:allcollege.php?dlt=1");
?>