<?php
	include("database.php");
	if(empty($_POST["email"]) && empty($_POST["pass"]) && empty($_POST["rpass"])){
	  header("location:reg.php?err=1");
	}
	else{
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$rpass=$_POST["rpass"];
		if($pass==$rpass){
			$rs=mysql_query("select * from login where email='$email' ");
		  if($r=mysql_fetch_array($rs)){
		    header('location:reg.php?same=1');
			}
			else{
			mysql_query("insert into login values ('$email','$pass')");
			 setcookie("user",$email,time()+6000);
			header("location:yrproblem.php?suc=1");
			}
		}
		else{
		header("location:reg.php?mismatch=1");	
		}
	}
?>		