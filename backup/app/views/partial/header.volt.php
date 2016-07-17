<!-- Top Navbar -->
<nav class="clearfix">
	<ul class="clearfix pull-menu">
		<li>
			<a href="#">Menu
				<div class="icon-bar-container" style="width:20px;">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</a>
		</li>	
	</ul>
	<ul class="clearfix floleft">
		<li><a href="<?= $this->url->get() ?>">Oversign</a></li>	
	</ul>
	<ul class="clearfix floright">
		<li><a href="<?= $this->url->get() ?>">Home</a></li>
		<li><a href="<?= $this->url->get('template') ?>">Template</a></li>
		<li>
			<a href="<?= $this->url->get('widget') ?>">Widget</a>
		</li>
		<li>
			<a href="<?= $this->url->get('help') ?>">Help</a>
		</li>
		<li>
			<a href="#" class="md-trigger" data-modal="modal-login">Login</a>
		</li>	
	</ul>
</nav>