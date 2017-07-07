<?php
	include("database.php");
	if(isset($_GET["br"])){
	$br=$_GET["br"];
	mysql_query("delete from branch where branch='$br' ");
	header("location:allbranchform.php?dlt=1");
	}
?>