<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-info">
				<h3 class="panel-heading">Categories</h3>
				<div id="listCategoryContainer" class="row panel-body list-group">
				<?php 
				$countCat = count($request["listCategory"]);
				for($i=0;$i<$countCat;){
					if($request["listCategory"][$i]->Parent == 1){
						echo '<a class="list-group-item list-group-item-info subCategory" href="#"><h4>'.$request["listCategory"][$i]->TemplateName.'</h4></a>';
						$i++;
						while($i<$countCat&&
								$request["listCategory"][$i]->ParentCategoryID==$request["listCategory"][$i-1]->ParentCategoryID){
							echo '<a href="#" class="categoryFilter filterOption list-group-item" id="'.$request["listCategory"][$i]->TemplateID.'">'.$request["listCategory"][$i]->TemplateName.'</a>';
							$i++;
						};
					}
				}
				?>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="text-center">Choose your website template</h3>
					<div class="form-group"></div>
					<div class="form-group input-group">
						<span class="input-group-addon">Sort by</span>
						<select class="form-control" id="sortingOption">
							<option value="0">Template Title</option>
							<option value="1">Latest Update</option>
							<option value="2">Most Popular</option>
						</select>
					</div>
				</div>
				<div class="panel-body" id="templateContainer">
					<div id="templateItem" class="col-sm-6 hide itemPanel">
						<div class="panel panel-default">
							<div class="panel-heading text-center template-title"></div>
							<div class="panel-body">
								<img class="screen-shot" style="width:100%"/>
								<div class="col-sm-4">
									<span class="glyphicon glyphicon-user"></span>
									<span class="total-use large"></span>
								</div>
								<div class="col-sm-8">
									<input type="hidden" class="form-control rating-input" data-fractions="2">
									<span class="total-rating"></span>
								</div>
							</div>
							<div class="panel-footer">
								<div class="btn-group col-sm-12">
								<button class="btn btn-default col-sm-6 previewButton">Preview</button>
								<button class="btn btn-default col-sm-6 useButton">Use</button>
								</div>
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