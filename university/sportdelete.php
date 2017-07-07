<?php
	include("database.php");
	if(isset($_GET["id"])){
		$id=$_GET["id"];
	mysql_query("delete from sport where sn=$id");
	header("location:sport.php?dlt=1");
	}
?>