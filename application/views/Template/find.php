<script>
	$(document).ready(function(){
		$("#startLoad").click(function(e){
			e.preventDefault();
		})
	})
</script>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="text-center" data-toggle="collapse" href="#c1"><h3>Filter Template</h3></a>
					<div id="c1" class="panel-collapse collapse">
						<div class="panel panel-default panel-body">
							<span>Sort by :</span>
							<button class="panel-title btn btn-default">Latest Update</button>
							<button class="panel-title btn btn-default">Most Popular</button>
						</div>
						<div class="panel panel-default panel-body">
							<h3 class="panel-body">Category</h3>
							<div class="row">
							<?php 
							$countCat = count($request["listCategory"]);
							for($i=0;$i<$countCat;){
								if($request["listCategory"][$i]->Parent == 1){
									echo '<div class="panel panel-default col-sm-3" style="padding:0">
											<div class="panel-heading">
												<h4 class="panel-title">'.$request["listCategory"][$i]->TemplateName.'</h4>
											</div>
												<ul class="list-group">';
											$i++;
											while($i<$countCat&&
													$request["listCategory"][$i]->ParentCategoryID==$request["listCategory"][$i-1]->ParentCategoryID){
												echo '<a href="#"><li class="list-group-item">'.$request["listCategory"][$i]->TemplateName.'</li></a>';
												$i++;
											};
									echo		'</ul>
										</div>';
								}
							}
							?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div id="templateItem" class="col-sm-3 hide">
						<img class="iSS" style="width:100%" src="<?=$domain?>/assets/images/background/top-bg.jpg" />
						<button class="btn btn-default col-sm-6">Preview</button>
						<button class="btn btn-default col-sm-6">Use</button>
					</div>
					<div id="templateItem" class="col-sm-3">
						<img class="iSS" style="width:100%" src="<?=$domain?>/assets/images/background/top-bg.jpg" />
						<button class="btn btn-default col-sm-6">Preview</button>
						<button class="btn btn-default col-sm-6">Use</button>
					</div>
					<div id="templateItem" class="col-sm-3">
						<img class="iSS" style="width:100%" src="<?=$domain?>/assets/images/background/top-bg.jpg" />
						<button class="btn btn-default col-sm-6">Preview</button>
						<button class="btn btn-default col-sm-6">Use</button>
					</div>
					<div id="templateItem" class="col-sm-3">
						<img class="iSS" style="width:100%" src="<?=$domain?>/assets/images/background/top-bg.jpg" />
						<button class="btn btn-default col-sm-6">Preview</button>
						<button class="btn btn-default col-sm-6">Use</button>
					</div>
					<div id="templateItem" class="col-sm-3">
						<img class="iSS" style="width:100%" src="<?=$domain?>/assets/images/background/top-bg.jpg" />
						<button class="btn btn-default col-sm-6">Preview</button>
						<button class="btn btn-default col-sm-6">Use</button>
					</div>
				</div>
				<a href="#" id="startLoad"><div class="panel-footer text-center">Load More</div></a>
			</div>
		</div>
	</div>
</div>