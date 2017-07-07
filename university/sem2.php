<?php

	if($_REQUEST["wk"]){
		$wk=$_REQUEST["wk"];
		
			?>
			
			<div class="row">
			<label class="col-sm-3">Branch:</label>
			<div class="col-sm-6">
				<select name="br" class="form-control">
					<option>select branch</option>
					<?php
						include("database.php");
						$rs=mysql_query("select * from branch where degree='$wk' ");
						while($r=mysql_fetch_array($rs)){
							?>
							<option value="<?=$r[2]?>"><?=$r[2]?></option>
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