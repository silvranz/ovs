<!DOCTYPE html>
<html>
    <head>
        <title>Ovs - Build Your Awesome Website</title>
		<link rel="stylesheet" href="<?php echo $this->url->get('css/normalize.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/skeleton.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/custom.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/top-navbar.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/modal.css'); ?>" />		
		<link rel="shortcut icon" href="<?php echo $this->url->get('images/ovs.ico'); ?>">
		<script>
			<?php echo $this->partial('partial/config-js'); ?>
		</script>
    </head>
    <body>
		<header>
			<?php echo $this->partial('partial/header'); ?>
		</header>
        <div id="content"><?php echo $this->getContent(); ?></div>

		<footer class="bs-docs-footer" role="contentinfo">
			<?php echo $this->partial('partial/footer'); ?>
		<footer>
		<div>
			<?php echo $this->partial('partial/main-modal'); ?>
		</div>		
		<script type="text/javascript" src="<?php echo $this->url->get('js/jquery.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->url->get('js/main.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->url->get('js/skeleton-modal/classie.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->url->get('js/skeleton-modal/modalEffects.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->url->get('js/functions.js'); ?>"></script>
    </body>
</html>