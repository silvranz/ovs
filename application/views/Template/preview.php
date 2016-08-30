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
		<div class="col-sm-12">
			<div class="form-group text-center">
				<h3><?=$templateName?></h3>
				<button class="btn btn-default">Use this template</button>
			</div>
		</div>
	</div>
</div>
<?php include($page)?>