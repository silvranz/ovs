<!DOCTYPE HTML>
<html>
	<head>
		<title>Testing</title>
		<link rel="stylesheet" href="<?=$page_base?>css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="<?=$page_base?>css/main.css"></link>
		<script src="<?=$page_base?>js/jquery.min.js"></script>
		<script src="<?=$page_base?>js/bootstrap.min.js"></script>
	</head>
	<body ><!--pinknya: #ffb6c1, greynya #999999-->
		<div class="container">
			<div class="row">
				<img class="col-sm-2 col-sm-offset-5" src="<?=$page_base?>images/a.jpg"></img>
				<h3 class="col-sm-6 col-sm-offset-3 text-center">Header</h3>
			</div>
		</div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="col-sm-6 col-sm-offset-3 list-inline">
					<li class="col-sm-3"><a href="index.php"><h4>Home</h4></a></li>
					<li class="col-sm-3"><a href="about-us.php"><h4>About Us</h4></a></li>
					<li class="col-sm-3"><a href="product-list.php"><h4>Products</h4></a></li>
					<li class="col-sm-3"><a href="contact-us.php"><h4>Contact Us</h4></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<h3>About Us</h3>
				<div class="col-sm-2">
					<ul class="nav nav-pills nav-stacked sideMenu">
						<li class="active"><a data-toggle="pill" href="#about1">About Us</a></li>
						<li><a data-toggle="pill" href="#about2">History</a></li>
						<li><a data-toggle="pill" href="#about3">Contact Person</a></li>
					</ul>
				</div>
				<div class="col-sm-10 tab-content contentContainer">
					<div id="about1" class="tab-pane fade in active">
						<h3>About Us</h3>
						<p>Description</p>
					</div>
					<div id="about2" class="tab-pane fade">
						<h3>History</h3>
						<p>Description</p>
					</div>
					<div id="about3" class="tab-pane fade">
						<h3>Contact Person</h3>
						<p>Description</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="bs-docs-footer"> 
		<h4 class="text-center">Copyright © 2016 Oversign. All rights reserved</h4>
		</footer>
	</body>
</html>