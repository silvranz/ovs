<?php include("config/global.php") ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Testing</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="css/main.css"></link>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body ><!--pinknya: #ffb6c1, greynya #999999-->
		<div class="container">
			<div class="row">
				<img class="col-sm-2 col-sm-offset-5" src="images/a.jpg"></img>
				<h3 class="col-sm-6 col-sm-offset-3 text-center">Header</h3>
			</div>
		</div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="col-sm-6 col-sm-offset-3 list-inline">
					<li class="col-sm-3"><a href="<?=$base_url?>index.php"><h4>Home</h4></a></li>
					<li class="col-sm-3"><a href="<?=$base_url?>about-us.php"><h4>About Us</h4></a></li>
					<li class="col-sm-3"><a href="<?=$base_url?>product-list.php"><h4>Products</h4></a></li>
					<li class="col-sm-3"><a href="<?=$base_url?>contact-us.php"><h4>Contact Us</h4></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<h3>About Us</h3>
				<div class="col-sm-2">
					<ul class="nav nav-pills nav-stacked sideMenu">
						<li class="active"><a data-toggle="pill" href="#history">Our History</a></li>
						<li><a data-toggle="pill" href="#vission">Vission & Mission</a></li>
						<li><a data-toggle="pill" href="#team">Our Team</a></li>
					</ul>
				</div>
				<div class="col-sm-10 tab-content contentContainer">
					<div id="history" class="tab-pane fade in active">
						<h3>Our History</h3>
						<p>Some content.</p>
					</div>
					<div id="vission" class="tab-pane fade">
						<h3>Vission & Mission</h3>
						<p>Some content in menu 1.</p>
					</div>
					<div id="team" class="tab-pane fade">
						<h3>Our Team</h3>
						<p>Some content in menu 2.</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="bs-docs-footer"> 
		<h4 class="text-center">Copyright © 2016 Oversign. All rights reserved</h4>
		</footer>
	</body>
</html>