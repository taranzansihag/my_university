
			
				
			
					<?php
					
					include("database.php");
					$flag=0;
					$sn=0;
					
					$sn2=0;
					$name=$_POST["dp"];
					$charge=$_POST["cnt"];
					$email1=$_POST["email1"];
					$pass=$_POST["pass"];
					$contact=$_POST["contact"];
					$rs=mysql_query("select max(sn) from department");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$rs=mysql_query("select max(sn) from employee");
					while($r=mysql_fetch_array($rs)){
						$sn2=$r[0];
					}
					$sn=$sn+1;
					$sn2=$sn2+1;
					mysql_query("insert into department values ('$sn','$name','$charge','$pass','$contact')");
					mysql_query("update employee set parent='parent',password='$pass',department='$name' where controller='$charge' ");
					header("location:vcdep.php?succ=1");
					?>
					
				