<?php
if(isset($_GET['roll'])){
	$roll=$_GET["roll"];
}
	include("database.php");
	$name=$_POST["name"];
	$fname=$_POST["fname"];
	$sub1=$_POST["sub1"];
	$sub2=$_POST["sub2"];
	$sub3=$_POST["sub3"];
	$sub4=$_POST["sub4"];
	$sub5=$_POST["sub5"];
	$sub6=$_POST["sub6"];
	$total=$_POST["total"];
	$sem=$_POST["sem"];
	$yr=$_POST["yr"];
	$dg=$_POST["dg"];
	$br=$_POST["br"];
	$msg=$dg.' '.$yr.' '.$sem;
	$msg1=$dg.' '.$yr;
	
	$sn=0;
	$sn1=0;
	$sn2=0;
	$sn3=0;
	$flag=0;
	
/*--------------------------------------------------------------*/
	
	$rs=mysql_query("select max(sn) from nbresult");
	while($r=mysql_fetch_array($rs)){
		$sn=$r[0];
	}
	$rs1=mysql_query("select max(sn) from nresult");
	while($r1=mysql_fetch_array($rs1)){
		
		$sn1=$r1[0];
	}
	$rs2=mysql_query("select max(sn) from nsresult");
	while($r2=mysql_fetch_array($rs2)){
		$sn2=$r2[0];
	}
	$rs3=mysql_query("select max(sn) from result");
	while($r3=mysql_fetch_array($rs3)){
		$sn3=$r3[0];
	}
	
	
/*--------------------------------------------------------------*/
	
	
	$rs1=mysql_query("select * from nresult where msg='$msg1' ");
	while($r1=mysql_fetch_array($rs1)){
		
			$flag=1;
		
	}
	$rs1=mysql_query("select * from nsresult where msg='$msg' ");
	while($r1=mysql_fetch_array($rs1)){
	
			$flag=1;
		
	}
	$rs1=mysql_query("select * from nbresult where msg='$msg1' ");
	while($r1=mysql_fetch_array($rs1)){
		
			$flag=1;
		
	}
	
	
	
/*--------------------------------------------------------------*/	
	
	
	
	
	
	
	$sn=$sn+1;
	$sn1=$sn1+1;
	$sn2=$sn2+1;
	$sn3=$sn3+1;
	if($sem==0 && $br!='no' and $flag==0){
		mysql_query("insert into nbresult values ('$sn','$dg','$br','$yr','$msg1')");
	}
	else if($br=='no' and $flag==0){
		mysql_query("insert into nresult values ('$sn1','$dg','$yr','$msg1')");
	}
	else if($flag==0){
		mysql_query("insert into nsresult values ('$sn2','$dg','$br','$yr','$sem','$msg')");
	}
	
	
	mysql_query("insert into result values ('$sn3','$roll','$name','$fname','$dg','$br','$yr','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$total','$sem',0) ");
	mysql_query("update student set result='$total',yr='$yr',sem='$sem' where rollno='$roll' ");
	header("location:rollno.php");
?>