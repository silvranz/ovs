<?php 
include("config/global.php") ;
$sql = "SELECT aboutus_title, aboutus_desc FROM aboutus ORDER BY UNIX_TIMESTAMP(aboutus_date) DESC";
$result = $conn->query($sql);
$aboutUs = [];
if ($result->num_rows > 0) {
	while($row =$result->fetch_assoc()){
		array_push($aboutUs,$row);
	}
}
$countAbout = count($aboutUs);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?=$projectName?></title>
		<link rel="stylesheet" href="css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="css/main.css"></link>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body ><!--pinknya: #ffb6c1, greynya #999999-->
		<div class="container">
			<div class="row">
				<img class="col-sm-2 col-sm-offset-5" src="images/<?=$logo?>"></img>
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
						<?php for($i=0;$i<$countAbout;$i++){?>
						<li <?=$i==0?'class="active"':""?>>
							<a data-toggle="pill" href="#<?=strtolower(str_replace(" ","",$aboutUs[$i]["aboutus_title"]))?>"><?=$aboutUs[$i]["aboutus_title"]?></a>
						</li>
						<?php }?>
					</ul>
				</div>
				<div class="col-sm-10 tab-content contentContainer">
					<?php for($i=0;$i<$countAbout;$i++){?>
					<div id="<?=strtolower(str_replace(" ","",$aboutUs[$i]["aboutus_title"]))?>" class="tab-pane fade<?=$i==0?" in active":""?>">
						<h3><?=$aboutUs[$i]["aboutus_title"]?></h3>
						<p><?=$aboutUs[$i]["aboutus_desc"]?></p>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
		<footer class="bs-docs-footer"> 
		<h4 class="text-center">Copyright © 2016 Oversign. All rights reserved</h4>
		</footer>
	</body>
</html>
<?php include("config/end.php") ?>