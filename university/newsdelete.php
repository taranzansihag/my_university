<?php
	include("database.php");
	if(isset($_GET["id"])){
		$id=$_GET["id"];
	mysql_query("delete from news where sn=$id");
	header("location:news.php?dlt=1");
	}
?>