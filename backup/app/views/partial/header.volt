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
		<li><a href="{{ url() }}">Oversign</a></li>	
	</ul>
	<ul class="clearfix floright">
		<li><a href="{{ url() }}">Home</a></li>
		<li><a href="{{ url("template") }}">Template</a></li>
		<li>
			<a href="{{ url("widget") }}">Widget</a>
		</li>
		<li>
			<a href="{{ url("help") }}">Help</a>
		</li>
		<li>
			<a href="#" class="md-trigger" data-modal="modal-login">Login</a>
		</li>	
	</ul>
</nav>