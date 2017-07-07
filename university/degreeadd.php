<?php
	include("database.php");
	$sn=0;
	$dg=$_POST["dg"];
	$yr=$_POST["yr"];
	$sem=$_POST["sem"];
	$sem1=$_POST["sem1"];
	$dr=$_POST["dr"];
	$rs=mysql_query("select max(sn) from degree_section");
	while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
				$sn=$sn+1;	
	mysql_query("insert into degree_section values('$sn','$dg','$yr','$sem','$sem1','$dr')");
	header("location:branchform.php?succ=1");
?>