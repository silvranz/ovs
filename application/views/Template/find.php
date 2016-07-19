<script>
</script>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-4"> 
				<div class="panel-group" id="accordion">
					<?php 
						$countCat = count($request["listCategory"]);
						for($i=0;$i<$countCat;){
							if($request["listCategory"][$i]->Parent == 1){
								echo '<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" href="#collapse'.$i.'">
												'.$request["listCategory"][$i]->TemplateName.'</a>
											</h4>
										</div>
										<div id="collapse'.$i.'" class="panel panel-collapse collapse '.($i==0?'in':'').'">
											<ul class="list-group">';
										$i++;
										while($i<$countCat&&
												$request["listCategory"][$i]->ParentCategoryID==$request["listCategory"][$i-1]->ParentCategoryID){
											echo '<li class="list-group-item">'.$request["listCategory"][$i]->TemplateName.'</li>';
											$i++;
										};
								echo		'</ul>
										</div>
									</div>';
							}
						}
					?>
				</div>
			</div>
			<div id="scrolling" class="col-sm-8">
				<a class="btn btn-primary" href="<?=$domain?>/template/preview/1">Template 1</a>
			</div>
		</div>
	</div>
</div>