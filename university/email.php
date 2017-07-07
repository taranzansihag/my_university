<?php
 if($_REQUEST["wk"]){
	 $wk=$_REQUEST["wk"];
	 include("database.php");
	 $rs = mysql_query("select * from employee where controller='$wk' ");
	 while($r=mysql_fetch_array($rs)){
		 ?>
		 <br>
		 Email id:
		 <input class="form-control" type="text" name="<?=$r[2]?>" value="<?=$r[2]?>"><br>
		 <?php
	 }
 }
?>