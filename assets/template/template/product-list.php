<?php 
	include("config/global.php");
	$sql = "SELECT prod_cat_id, prod_cat_name
			FROM prod_cat
			ORDER BY prod_cat_name";
	$result = $conn->query($sql);
	$category = [];
	if ($result->num_rows > 0) {
		array_push($category,$result->fetch_assoc());
	}
	$countCategory = count($category);
	$sql = "SELECT prod_id, prod_name, prod_image, p.prod_cat_id
						FROM prod p
						JOIN prod_cat pc ON pc.prod_cat_id=p.prod_cat_id
						ORDER BY UNIX_TIMESTAMP(prod_date) DESC";
	$result = $conn->query($sql);
	$product = [];
	$tempProduct = "";
	if ($result->num_rows > 0) {
		$tempProduct = $result->fetch_assoc();
		$product[$tempProduct["prod_cat_id"]] = [];
		array_push($product[$tempProduct["prod_cat_id"]],
				array("prod_id"=>$tempProduct["prod_id"],
					"prod_name"=>$tempProduct["prod_name"],
					"prod_image"=>$tempProduct["prod_image"]
					));
	}
	$countProduct = count($product);
?>
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
				<h3>Our Products</h3>
				<div class="col-sm-2">
					<ul class="nav nav-pills nav-stacked sideMenu">
					<?php for($i=0;$i<$countCategory;$i++){?>
						<li <?=$i==0?"class='active'":""?>><a data-toggle="pill" href="#<?=strtolower(str_replace(" ","",$category[$i]["prod_cat_name"]))?>"><?=strtolower(str_replace(" ","",$category[$i]["prod_cat_name"]))?></a></li>
					<?php }?>
					</ul>
				</div>
				<div class="col-sm-10 tab-content contentContainer">
					<?php for($i=0;$i<$countCategory;$i++){?>
					<div id="<?=strtolower(str_replace(" ","",$category[$i]["prod_cat_name"]))?>" class="tab-pane fade<?=$i==0?" in active":""?>">
						<h3><?=$category[$i]["prod_cat_name"]?></h3>
						<div class="list-product">
							<?php 
								$tempProdCat = $product[$category[$i]["prod_cat_id"]];
								$countProdCat = count($tempProdCat);
								for($i=0;$i<$countProdCat;$i++){
							?>
							<a class="col-sm-3" href="<?=$base_url?>product-detail.php?item=<?=$tempProdCat[$i]["prod_id"]?>">
								<h5 class="col-sm-12 text-center"><?=$tempProdCat[$i]["prod_name"]?></h5>
								<img class="col-sm-12" src="images/<?=$tempProdCat[$i]["prod_image"]?>" />
							</a>
							<?php }?>
						</div>
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