<style>
	#formFullfillment .custom-input {
		border-width: 0 0 1px 0;
		box-shadow: none;
	}

	#formFullfillment #domainName {
		width: 100%; 
		display: inline-block;
		margin-bottom: 10px;
	}

	#formFullfillment #wrapper-availability {
		width: 100%; 
		display:inline-block; 
		text-align:center; 
		font-size: 16px;
	}

	#formFullfillment #wrapper-availability span {
		font-size: 30px;
	}

	#formFullfillment #wrapper-availability .glyphicon-ok {
		color: #05C767; 
	}

	#formFullfillment #wrapper-availability .glyphicon-remove {
		color: 	#CB002E;
	}

	#lblDomainName {
		font-size: 30px;
	}

</style>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="form-group text-center">
				<h3>Create your new website</h3>
			</div>
			<div class="wrapper-static bg-white">
				<form id="formFullfillment">
					<input id="keyValue" type="hidden" value="<?=$request["key"]?>">
					<div class="form-group text-center">
						<label id="lblDomainName" for="domainName" class="control-label">Domain Name</label>
						<div>
							<input id="domainName" type="text" name="domainName" class="form-control custom-input" value="" placeholder="Type domain name here &hellip;">
							<div id="wrapper-availability">
								<label class="lblStatus error-message"></label>
								<span class="glyphicon glyphicon-remove availability"></span>
							</div>
						</div>
					</div>

					<button id="submitForm" disabled class="btn btn-success full-width mb20">Create my website</button>
				</form>
			</div>
		</div>
	</div>
</div>