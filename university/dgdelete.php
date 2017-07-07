<?php
	include("database.php");
	if(isset($_GET["degree"])){
		$degree=$_GET["degree"];
		mysql_query("delete from degree_section where degree='$degree' ");
		header("location:degree_section.php?succ=1");
	}
?>