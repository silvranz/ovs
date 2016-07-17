<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
</head>
<body>
<?php 
	$count = count($body);
	for($i=0;$i<$count;$i++){
		echo "<".$body[$i]["tag"]." style='".$body[$i]["style"]."' ".($body[$i]["closedTag"]==1?"></".$body[$i]["tag"].">":"/>");
	}
?>
</body>
</html>