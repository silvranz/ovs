<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/top-navbar.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/switch.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/skeleton.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/range.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/normalize.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/modal.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/hover.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/editor-top-navbar.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/web-workshop/custom.css') ?>" />
		<link rel="shortcut icon" href="<?= $this->url->get('images/ovs.ico') ?>">
        <title>Ovs - Build Your Awesome Website</title>
    </head>
    <body>
		<!-- Top Navbar -->
		<nav class="clearfix">
			<ul class="clearfix">
				<li class="first"><a href="<?= $this->url->get() ?>">Oversign</a></li>
				<li class="second">
					<a id="btnOpenBoxPage" href="#">
						<span>Page Name</span>
						<img src="<?= $this->url->get('images/icons/arrow-down-white.png') ?>" />
					</a>
					<div class="box-page">
						<div class="row">
							<div class="twelve columns">
								<div class="box-list-page">
									<ul>
										<li class="item-template" style="display:none;">
											<div class="row">
												<div class="three columns">
													<div class="preview-workspace-container" style="border:1px solid #000; width:60px; height:40px;">
														<!-- <img id=	"previewPage" style="width:60px; height:40px;" /> -->
													</div>
												</div>
												<div class="nine columns">
													<div class="page-name">Page Name</div>
													<div class="page-control">
														<a class="btnTriggerRenamePageModal md-trigger" href="#" data-modal="modal-rename-page">Rename</a>
														<a class="btnDuplicatePage" href="#">Duplicate</a>
														<a class="btnTriggerDeletePageModal md-trigger" href="#" data-modal="modal-delete-page">Delete</a>
													</div>
												</div>
											</div>
											<div class="row no-pd">
												<div class="nine columns offset-by-three">
													<span>Set as homepage</span>
													<label class="switch switch-green">
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
					<a id="btnOpenBoxTools" href="#">Tools</a>
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
					</div>
				</li>
				<li><a href="#">Save</a></li>
				<li><a id="btnPreview" href="#">Preview</a></li>
				<li>
					<a id="btnPublish" href="#">Publish</a>
				</li>
			</ul>
			<a href="#" id="pull">Menu</a>
		</nav>
		<?= $this->getContent() ?>
    </body>
</html>