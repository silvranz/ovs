<style>
	.screen-shot {
		width:100%; 
		height: auto;

		max-width: 260px;
		max-height: 130px;

		margin: 0 auto;
	}
	.wrapper-desc {
		height: 100px;
	}
	.website-title {
		font-size: 30px;
	}
	.domain-name {
		font-size: 16px;
	}
	.itemPanel {
		border-bottom: 1px solid #ddd;
		padding-bottom: 15px;
		margin-bottom: 15px;
	}
	.itemPanel button {
		max-width: 100px;
		width: 100%;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<div class="mt20">
				<h2 class="no-mg pull-left">My Website</h2>
				<h4 class="no-mg pull-right">
					<button id="createWebsite" type="button" class="btn btn-success">
						<span class="glyphicon glyphicon-plus"></span>
						Create New Website
					</button>
				</h4>
			</div>
			<div class="clearfix mb20"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-9">
			<div id="websiteContainer">
				<div id="templateItem" class="row hide itemPanel">
					<div class="col-sm-4">
						<img class="screen-shot" />
					</div>
					<div class="col-sm-8">
						<div class="wrapper-desc">
							<div class="fbold website-title"></div>
							<div class="fbold">
								<a href="#" class="domain-name" target="_blank"></a>
							</div>
							<div class="mt10">
								<button type="button" class="btn btn-primary previewButton">
									Preview
								</button>
								<button type="button" class="btn btn-success editButton">
									Edit
								</button>
								<button type="button" class="btn btn-danger">
									Deactivate
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="#" id="startLoad">
				<div class="panel-footer text-center">Load More</div>
			</a>
		</div>

		<div class="col-sm-3">
			<h3>Ads</h3>
		</div>
	</div>
</div>