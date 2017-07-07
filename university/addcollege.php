<?php
	include("database.php");
	$name=$_POST["college"];
	$add=$_POST["cgaddress"];
	$contact=$_POST["contact"];
	$sn=0;
	$rs=mysql_query("select max(sn) from college");
	while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
				$sn=$sn+1;
	mysql_query("insert into college values('$sn','$name','$add','$contact')");
		header("location:allcollege.php?succ=1");
?>