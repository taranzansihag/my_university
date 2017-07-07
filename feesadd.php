<?php
	include("database.php");
	if(isset($_GET["roll"])){
		$roll=$_GET["roll"];
	}
	mysql_query("update student set fees='yes' where rollno='$roll' ");
	echo '<h1 class="w3-text-red w3-text-shadow" align="center"><br><br><br><br>'."Successfull!".'</h1>';
?>