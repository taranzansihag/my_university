<?php
	if($_REQUEST["wk"]){
		$wk=$_REQUEST["wk"];
		if($wk=="yes"){
			?>
			<div class="row">
			<label class="col-sm-3">No of Semester</label>
			<div class="col-sm-6">
			<select name="sem1" class="form-control">
				<option>selsect semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>	
			</div>
			</div>
			<br>
			<div class="row">
						<label class="col-sm-3">Sem Duration:</label>
						<div class="col-sm-6">
							<input class="form-control" type="text" name="dr" placeholder="Duration" required="required">
						</div>
					</div>
		<?php
		}	
         else{
			 
		 }		
	}
	?>