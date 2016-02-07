<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/skeleton.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/top-navbar.css" />
		<link rel="stylesheet" href="css/modal.css" />
        <title>Ovs - Build Your Own Website</title>
    </head>
    <body>
		<header>
			{{ partial("partial/header") }}			
		</header>
        <div id="content">{{ content() }}</div>

		<footer class="bs-docs-footer" role="contentinfo">
			{{ partial("partial/footer") }}
		<footer>
    </body>
</html>