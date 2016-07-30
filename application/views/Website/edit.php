<div class="container">
	<div class="row">
		<div class="form-group col-sm-12" ></div>
		<div class="col-sm-2">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a data-toggle="pill" href="#setting">Setting</a></li>
			  <li><a data-toggle="pill" href="#content">Content</a></li>
			</ul>
		</div>
		<div class="col-sm-10">
			<div class="tab-content">
				<div id="setting" class="tab-pane fade in active">
					<img  class="col-sm-12 form-group" src="<?=$domain."/assets/images/preview1.jpg"?>"/>
					<div class="form-group input-group">
						<span class="input-group-addon">Background Color</span>
						<input type="text" class="form-control" id="fullName" placeholder="Input your background color"/>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Background Image</span>
						<input type="file" class="form-control" id="fullName" placeholder="Input your background color"/>
					</div>
					<button id="changeProfile" class="btn btn-default col-sm-12">Save Changes</button>
					<div class="form-group col-sm-12" ></div>
				</div>
				<div id="content" class="tab-pane fade">
					<h3>Menu 1</h3>
					<p>Some content in menu 1.</p>
				</div>
			</div>
		</div>
	</div>
</div>