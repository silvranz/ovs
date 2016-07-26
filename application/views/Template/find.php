<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<a class="text-center" data-toggle="collapse" href="#c1"><h3>Filter Template</h3></a>
					<div id="c1" class="panel-collapse collapse">
						<div class="panel panel-default panel-body">
							<span>Sort by :</span>
							<button class="panel-title btn btn-default sortFilter filterOption" data-mode="1">Latest Update</button>
							<button class="panel-title btn btn-default sortFilter filterOption" data-mode="2">Most Popular</button>
						</div>
						<div class="panel panel-default panel-body">
							<h3 class="panel-body">Category</h3>
							<div id="listCategoryContainer" class="row">
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
												echo '<a href="#" class="categoryFilter filterOption" id="'.$request["listCategory"][$i]->TemplateID.'"><li class="list-group-item">'.$request["listCategory"][$i]->TemplateName.'</li></a>';
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
				<div class="panel-body" id="templateContainer">
					<div id="templateItem" class="col-sm-3 hide itemPanel">
						<div class="panel panel-default">
							<div class="panel-heading text-center template-title">Template Title or Name</div>
							<div class="panel-body">
								<img class="screen-shot" style="width:100%"/>
								<div class="col-sm-4">
									<span class="glyphicon glyphicon-user"></span>
									<span class="total-use large"></span>
								</div>
								<div class="col-sm-8">
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="total-rating"></span>
								</div>
							</div>
							<div class="panel-footer">
								<div class="btn-group col-sm-12">
								<button class="btn btn-default col-sm-6">Preview</button>
								<button class="btn btn-default col-sm-6 useButton">Use</button>
								</div>
								<div style="clear:both"></div>
							</div>
						</div>
					</div>
					<div id="templateItem" class="col-sm-3">
						<div class="panel panel-default">
							<div class="panel-heading text-center">Template 1</div>
							<div class="panel-body">
								<img class="iSS" style="width:100%" src="<?=$domain?>/assets/images/preview1.jpg" />
								<div class="col-sm-4">
									<span class="glyphicon glyphicon-user"></span>
									<span class="total-use large">100</span>
								</div>
								<div class="col-sm-8">
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="total-rating"><b>4.5</b></span>
								</div>
							</div>
							<div class="panel-footer">
								<a href="<?=$domain?>/template/preview/1" class="btn btn-default col-sm-6">Preview</a>
								<a class="btn btn-default col-sm-6">Use</a>
								<div style="clear:both"></div>
							</div>
						</div>
					</div>
				</div>
				<a href="#" id="startLoad"><div class="panel-footer text-center">Load More</div></a>
			</div>
		</div>
	</div>
</div>