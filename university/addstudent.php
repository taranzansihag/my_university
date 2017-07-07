<?php
 $flag=0;
 
	include("database.php");
	$name=$_POST["name"];
	$roll=$_POST["roll"];
	$fname=$_POST["fname"];
	$dob=$_POST["dob"];
	$mname=$_POST["mname"];
	$degree=$_POST["degree"];
	$branch=$_POST["branch"];
	$contact=$_POST["contact"];
	$college=$_POST["college"];
	$sn=0;
	$rs=mysql_query("select * from student where rollno='$roll'");
	while($r=mysql_fetch_array($rs)){
						$flag=1;
					}
					if($flag==0){
	$rs=mysql_query("select max(sn) from student");
	while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
	
				$sn=$sn+1;
	mysql_query("insert into student values('$sn','$roll','$name','$fname','$mname','$dob','$degree','$branch','$contact','$college',0,0,0,0,'no') ");
	
	header("location:allstudent.php?succ=1");
					}
					else{
						header("location:studentform.php?match=1");
					}
?>