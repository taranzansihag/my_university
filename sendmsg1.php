<?php
	include("database.php");
	$sn=0;
	$name=$_POST["email"];
	$msg=$_POST["msg"];
	$flag=0;
	              $rs=mysql_query("select max(sn) from problem");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					$sn=$sn+1;
					$rs=mysql_query("select * from problem where froms='$name'");
					while($r=mysql_fetch_array($rs)){
						$flag=1;
					}
	mysql_query("insert into problem values('$sn','$name','university','$msg','$flag')");
	header("location:yrproblem.php?succ=1");
?>