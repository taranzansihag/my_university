<?php
	include("database.php");
	$degree=$_POST["dg"];
	$br=$_POST["br"];
    $sn=0;
	$rs=mysql_query("select max(sn) from branch");
	while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
				$sn=$sn+1;
	mysql_query("insert into branch values('$sn','$degree','$br')");
		header("location:branchform.php?succ=1");
?>