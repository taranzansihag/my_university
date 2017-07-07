
			
				
			
					<?php
					
					include("database.php");
					$flag=0;
					$sn2=0;
					$dep=$_COOKIE["user"];
					$name=$_POST["controller"];
					$email1=$_POST["email1"];
					$pass=$_POST["pass"];
					$contact=$_POST["contact"];
				mysql_query("update employee set department='$dep' where controller='$name' ");
					
					header("location:$dep.php?succ=1");
					?>
					
				