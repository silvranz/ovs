<?php
	echo tag('title', 'Oversign');

	load_css(array(
		'bootstrap/bootstrap',
		'bootstrap/docs',
		'custom',
	));

	if(isset($additional_css) && !empty($additional_css)){
		load_css($additional_css);
	}
?>
<div class="container">
	<div class="row text-center">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="form-group text-center">
				<h3>Template info</h3>
			</div>
		</div>
	</div>
</div>
<iframe style="width:100%" src="<?=$this->domain."/assets/template/".$page."/index.php"?>">