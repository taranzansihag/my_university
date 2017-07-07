<?php
	$dg=$_POST["dg"];
	$br=$_POST["br"];
	$pdf=$dg.$br.".pdf";
	$target="file/";
	$target=$target.$pdf;
	$size=($_FILES['file']['size']);
	if(move_upload_file($_FILES['file']['temp_name'],$target)){
		echo "the file".basename($_FILES['file']['name'])."$size has been uploaded";
		
	}
	else{
		echo "sorry";
	}
?>