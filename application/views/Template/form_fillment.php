<div class="container">
	<div class="row text-center">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="form-group text-center">
				<h3>Create your new website</h3>
			</div>
			<div class="wrapper-static bg-white">
				<div class="header">
					<input id="keyValue" type="hidden" value="<?=$request["key"]?>">
					<div class="input-group form-group">
						<span class="input-group-addon">Store Name</span>
						<input type="text" class="form-control" id="storeName"/>
					</div>
					<div class="input-group form-group">
						<span class="input-group-addon">Domain Name</span>
						<input type="text" class="form-control" id="domainName"/>
						<span class="input-group-addon" title="availability">.ovslab.com</span>
					</div>
					<button id="submitForm" class="btn btn-default col-sm-12">Create my website</button>
					<div class=" form-group col-sm-12"></div>
				</div>
			</div>
		</div>
	</div>
</div>