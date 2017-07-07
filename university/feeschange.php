<?php
	include("database.php");
	$dg=$_POST["dg"];
	$yr=$_POST["yr"];
	$sem=$_POST["sem"];
	mysql_query("update student set fees='no' where degree='$dg' and (sem='$sem' or yr='$yr') ");
	header("location:fees.php");
?>