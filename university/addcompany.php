<?php
 include("database.php");
 $cmp=$_POST["cmp"];
 $pkg=$_POST["pkg"];
 mysql_query("insert into placement values ('$cmp','$pkg')");
 header("location:allcompany.php?succ=1");
?>