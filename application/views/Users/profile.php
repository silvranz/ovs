<div class="container">
	<div class="row text-center">
		<div class="form-group col-sm-12" ></div>
		<div class="col-sm-8 col-sm-offset-2 form-group">
			<img src="<?=$domain."/assets/images/".$request["profile"]->UserPhoto?>" />
		</div>
		<div class="col-sm-8 col-sm-offset-2 form-group input-group">
			<span class="input-group-addon">Full Name</span>
			<input type="text" class="form-control" id="fullName" value="<?=$request["profile"]->UserFullName?>" placeholder="Input your full name"/>
		</div>
		<div class="col-sm-8 col-sm-offset-2 form-group input-group">
			<span class="input-group-addon">Email</span>
			<input type="text" class="form-control" id="fullName" value="<?=$request["profile"]->UserEmail?>" placeholder="Input your full name"/>
		</div>
		<div class="col-sm-8 col-sm-offset-2 form-group input-group">
			<span class="input-group-addon">Gender</span>
			<select class="form-control">
				<option>Male</option>
				<option>Female</option>
			</select>
		</div>
		<div class="col-sm-8 col-sm-offset-2 form-group input-group">
			<span class="input-group-addon">Email</span>
			<select class="form-control">
				<?php 
					$cCountry = count($request["country"]);
					for($i=0;$i<$cCountry;$i++){
						echo "<option value='".$request["country"][$i]->CountryID."' ".($request["country"][$i]->CountryID==$request["profile"]->CountryID?"selected":"").">".$request["country"][$i]->CountryName."</option>";
					}
				?>
			</select>
		</div>
		<button id="changeProfile" class="btn btn-default col-sm-8 col-sm-offset-2">Save</button>
		<div class="form-group col-sm-12" ></div>
	</div>
</div>