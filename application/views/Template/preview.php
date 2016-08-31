<?php
	echo tag('title', $templateName);
?>
<nav class="navbar navbar-inverse">
  	<div class="container">
    	<div id="navbar" class="collapse navbar-collapse">
      		<ul class="nav navbar-nav">
      			<li><h3><?=$templateName?></3></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a class="btn btn-default" href="<?=$use_url?>">Use this template</a></li>
			</ul>
    	</div>
  	</div>
</nav>
<div>
	<?php include($page)?>
</div>