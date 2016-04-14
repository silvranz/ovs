<!DOCTYPE html>
<html>
    <head>
        <title>Ovs - Build Your Awesome Website</title>
		<link rel="stylesheet" href="<?= $this->url->get('css/normalize.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/skeleton.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/custom.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/top-navbar.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/modal.css') ?>" />
		<link rel="stylesheet" href="<?= $this->url->get('css/font.css') ?>" />		
		<link rel="shortcut icon" href="<?= $this->url->get('images/ovs.ico') ?>">
		<script>
			<?= $this->partial('partial/config-js') ?>
		</script>
    </head>
    <body>
		<header>
			<?= $this->partial('partial/header') ?>
		</header>
        <div id="content"><?= $this->getContent() ?></div>

		<footer class="bs-docs-footer" role="contentinfo">
			<?= $this->partial('partial/footer') ?>
		<footer>
		<div>
			<?= $this->partial('partial/main-modal') ?>
		</div>		
		<script type="text/javascript" src="<?= $this->url->get('js/jquery.js') ?>"></script>
		<script type="text/javascript" src="<?= $this->url->get('js/main.js') ?>"></script>
		<script type="text/javascript" src="<?= $this->url->get('js/skeleton-modal/classie.js') ?>"></script>
		<script type="text/javascript" src="<?= $this->url->get('js/skeleton-modal/modalEffects.js') ?>"></script>
		<script type="text/javascript" src="<?= $this->url->get('js/functions.js') ?>"></script>
    </body>
</html>