<?php
	include("database.php");
	if(isset($_GET["name"])){
		$sn=$_GET["name"];
		mysql_query("delete from problem where froms='$sn' or tos='$sn' ");
		header("location:msg.php?dlt=1");
	}
?>