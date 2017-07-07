<?php
	if($_REQUEST["wk"]){
		$wk=$_REQUEST["wk"];
		
			?>
				<div class="row">
					<label class="col-sm-3">BRANCH</label>
					 <div class="col-sm-6">
					 <select name="branch" class="form-control">
					 <option>select branch</option>
					 <option value="no">No branch</option>
					<?php
					 include("database.php");
					 $rs1 = mysql_query("select * from branch where degree='$wk' ");
					 while($r1=mysql_fetch_array($rs1)){
						 
						 ?>
						 <option value="<?=$r1[2]?>"><?=$r1[2]?></option>
					<?php
					 }
					?>	 
					</select>
					</div>
				</div>
				<br>
			<?php	
	}
	?>