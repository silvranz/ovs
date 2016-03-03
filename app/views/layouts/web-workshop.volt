<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="{{url("css/web-workshop/top-navbar.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/switch.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/skeleton.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/range.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/normalize.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/modal.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/hover.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/editor-top-navbar.css")}}" />
		<link rel="stylesheet" href="{{url("css/web-workshop/custom.css")}}" />
		<link rel="shortcut icon" href="{{url("images/ovs.ico")}}">
		<script src="{{url("js/jquery.js")}}" type="text/javascript"></script>
		<script src="{{url("js/custom")}}<?php echo "/".$customScript.".js" ?>" type="text/javascript"></script>
		{{ partial("partial/web-workshop-js") }}
        <title>Ovs - Build Your Awesome Website</title>
    </head>
    <body>
		<!-- Top Navbar -->
		<nav class="clearfix">
			<ul class="clearfix">
				<li class="first"><a href="{{url()}}">Oversign</a></li>
				<li class="second">
					<a id="btnOpenBoxPage" href="#">
						<span id="currentPageName">Page Name</span>
						<img src="{{url("images/icons/arrow-down-white.png")}}" />
					</a>
					<div class="box-page">
						<div class="row">
							<div class="twelve columns">
								<div class="box-list-page">
									<ul>
										<li class="page-item" id="item-template" style="display:none;">
											<div class="row">
												<div class="three columns">
													<div class="preview-workspace-container" style="border:1px solid #000; width:60px; height:40px;">
													</div>
												</div>												
												<div class="nine columns">
													<input type="text" class="page-name" value="Page Name"/>
												</div>
											</div>
											<div class="row">
												<div class="page-control">
													<button class="six columns button-primary btnDuplicatePage">Duplicate</button>
													<button class="six columns button-primary btnTriggerDeletePageModal">Delete</button>
												</div>
											</div>
											<div class="row">
												<div style="margin-top:3px;margin-bottom:3px">
													<span class="nine columns">Set as homepage</span>
													<label class="three columns switch switch-green">
														<input type="checkbox" class="switch-input switch-homepage">
														<span class="switch-label switch-homepage" data-on="Yes" data-off="No"></span>
														<span class="switch-handle switch-homepage"></span>
													</label>
												</div>
											</div>
										</li>
									</ul>
									<div style="margin: 5px 5px;">
										<input type="button" id="btnOpenModalAddPage" style="margin-top:10px;" class="button button-primary u-full-width md-trigger" data-modal="modal-add-page" value="Add Pages" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="third">
					<!--a id="btnOpenBoxTools" href="#">Tools</a>
					<div class="box-tools">
						<div class="row">
							<div class="twelve columns">
								<label>Ruler</label>
								<label class="switch switch-green">
									<input type="checkbox" id="switch-ruler" class="switch-input" checked>
									<span class="switch-label" data-on="On" data-off="Off"></span>
									<span class="switch-handle"></span>
								</label>
							</div>
						</div>
					</div-->
				</li>
				<li><a href="#">Save</a></li>
				<li><a id="btnPreview" href="#">Preview</a></li>
				<li>
					<a id="btnPublish" href="#">Publish</a>
				</li>
			</ul>
			<a href="#" id="pull">Menu</a>
		</nav>
		{{content()}}
    </body>
</html>