<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<h2>Website Template</h2>
			<p>Choose one of beautiful templates as your website</p>
		</div>
		<div class="col-sm-8">
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<form class="form-inline" role="form">
  				<div class="form-group">
					<label class="mr10" for="sortingOption">Sorting by</label>
					<select id="sortingOption" name="sortingOption" class="form-control">
						<option>Alphabetical</option>
						<option>Most Popular</option>
						<option>New Template</option>
					</select>
				</div>
			</form>
		</div>
		<div class="col-sm-9 no-pd">
			<div class="panel">
				<div class="panel-body no-pd" id="templateContainer">
					<div id="templateItem" class="col-sm-4 hide itemPanel">
						<div class="panel panel-default">
							<div class="panel-heading text-center template-title fbold bg-white"></div>
							<div class="panel-body no-pd">
								<img class="screen-shot" style="width:100%; height: 131px;"/>
							</div>
							<div class="panel-body">
								<button class="btn btn-primary col-sm-5 previewButton">Preview</button>
								<button class="btn btn-success col-sm-3 col-sm-offset-4 useButton">Use</button>
							</div>
							<div class="panel-footer">
								<div class="col-sm-6 col-xs-6">
									<input type="hidden" class="form-control rating-input pull-left" data-fractions="2">
									<!-- <span class="total-rating"></span> -->
								</div>
								<div class="col-sm-6 col-xs-6">
									<a href="#" class="total-use large fbold pull-right"></a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<button id="startLoad" class="btn btn-primary col-sm-12 mb10">Load More</button>
				<!-- <a href="#" id="startLoad"><div class="panel-footer text-center fbold btn btn-primary">Load More</div></a> -->
			</div>
		</div>
	</div>
</div>