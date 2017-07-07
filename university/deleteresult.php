<?php
	include("database.php");
	$sem=$_POST["sem"];
	$yr=$_POST["yr"];
	$dg=$_POST["dg"];
	mysql_query("update result set flag=1 where (sem='$sem' or year='$yr') and degree='$dg' ");
	mysql_query("delete from nsresult where sem='$sem' and year='$yr' and degree='$dg' ");
	mysql_query("delete from nbresult where year='$yr' and degree='$dg' ");
	mysql_query("delete from nresult where year='$yr' and degree='$dg' ");
	header("location:allresult.php?succ=1");
?>