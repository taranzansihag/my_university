<?php
	include("database.php");
	$to=$_POST["to"];
	$msg=$_POST["msg"];
	
	$sn=0;
					$rs=mysql_query("select max(sn) from problem");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
			$sn=$sn+1;
			mysql_query("insert into problem values('$sn','university','$to','$msg',0) ");
			header("location:msg.php?succ=1");
?>