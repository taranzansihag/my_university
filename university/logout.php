<?php
	include("database.php");
	if(!isset($_COOKIE["user"])){
			header("location:login.php");
		}
		else{
	setCookie("user","",time()-1);
	header("location:login.php");
		}
?>