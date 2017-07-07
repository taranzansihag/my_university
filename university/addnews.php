
			
				
			
					<?php
					
					include("database.php");
			
					
					$ntype=$_POST["ntype"];
					$sn=0;
				
					
					$rs=mysql_query("select max(sn) from news");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$sn=$sn+1;
				

					$news=$_POST["news"];  // retrieve cookie ( email id)
					//$email=$_POST["email"];
					$img=$news.".pdf";  // teja@tzn.com.jpg
					$target = "news/";  //  pro/teja@tzn.com.jpg
					$target = $target . $img;  //  pro/teja@tzn.com.jpg
					//$pic=($_FILES['photo']['name']);
					$size=($_FILES['photo']['size']);
					if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
					 { 
							mysql_query("insert into news values ('$sn','$news','$ntype')");
					header("location:news.php?succ=1");
						} 
					else 
					{ 
						 header("location:newsform.php?not=1");
					} 

					
				
				
					?>
					
				