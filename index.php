<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("/includes/header.php"); ?>
</head>

<body>
	<?php
	include("/includes/navbar-top.php");
	$valid_pages = ["basket", "confirm"];
	if(isset($_GET["page"]))
	{
		$req = $_GET["page"];
		if(in_array($req, $valid_pages)){
			switch($req){
				case "basket":
				include("/includes/basket.php");
				break;
				case "confirm":
				include("/includes/confirm.php");
				break;
			}
		} else {
			header("location: index.php");
			die();
		}	
		
	} else {
		include("/includes/products.php");
	}
	include("/includes/navbar-bottom.php");
	?>


</body>

<?php include("/includes/scripts.php"); ?>