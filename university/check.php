<?php
	include("database.php");
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$dp=$_POST["department"];
	
	$rs=mysql_query("select * from vc where email='$email' AND pass='$pass' AND name='$dp' ");
	$rs1=mysql_query("select * from department where email='$email' AND pass='$pass' AND name='$dp' ");
	if($r=mysql_fetch_array($rs)){
		setcookie("user",$dp,time()+3600);
	  if($dp=='vc'){	
			header("location:vc.php");
	  }
	  if($dp=='news'){	
			header("location:news.php");
	  }
	}
	
	
	else if($r1=mysql_fetch_array($rs1)){
		setcookie("user",$dp,time()+3600);
			header("location:$dp.php");
	}
	
	else{
			header("location:login.php?err=1");
	}
?>