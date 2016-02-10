<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="<?php echo $this->url->get('css/normalize.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/skeleton.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/custom.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/top-navbar.css'); ?>" />
		<link rel="stylesheet" href="<?php echo $this->url->get('css/modal.css'); ?>" />		
		<link rel="shortcut icon" href="<?php echo $this->url->get('images/ovs.ico'); ?>">
        <title>Ovs - Build Your Own Website</title>
    </head>
    <body>
		<header>
			<?php echo $this->partial('partial/header'); ?>
		</header>
        <div id="content"><?php echo $this->getContent(); ?></div>

		<footer class="bs-docs-footer" role="contentinfo">
			<?php echo $this->partial('partial/footer'); ?>
		<footer>
    </body>
</html>