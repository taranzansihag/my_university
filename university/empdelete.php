<?php
  include("database.php");
  $dep=$_COOKIE["user"];
  if(isset($_GET["email"])){
	  $email=$_GET["email"];
	  mysql_query("update employee set department='employee' where email='$email' ");
		header("location:$dep.php?dlt=1");
  }
?>