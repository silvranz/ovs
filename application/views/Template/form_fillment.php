<div class="container">
	<div class="row text-center">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="wrapper-static bg-white">
				<div class="header">
					<input id="keyValue" type="hidden" value="<?=$request["key"]?>">
					<div class="input-group">
						<span class="input-group-addon">Domain Name</span>
						<input type="text" class="form-control" id="domainName"/>
						<span class="input-group-addon" title="availability"><i class="availability glyphicon glyphicon-remove"></i></span>
					</div>
				</div>
			</div>
			<button id="submitForm" class="btn btn-default">Create my website</button>
		</div>
	</div>
</div>