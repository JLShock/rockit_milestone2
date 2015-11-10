<?php

	require_once('products.php');

	$prod_id = '';
	$quantity = '';
	$prod_name = '';

	if (isset($_GET['prod_id'])) {
		$prod_id = $_GET['prod_id'];
		if(array_key_exists($prod_id,$products)){
			$prod_name = $products[$prod_id];
		}
	}

	if (isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
	}

	$msg = 'You selected ' . $quantity . ": " . $prod_name;

	if ($prod_id == 'prod1') { 
		if ($quantity > 7) {
 			$msg = "You can't order over 7: Macbook";
		} 
	} 

	if ($quantity <= 0) {
		$msg = "You picked an invalid quantity!";
	} 

	if (!array_key_exists($prod_id,$products)) {
		$msg = "You picked an invalid product!";
	}

?>

<!-- HTML -->

<!DOCTYPE html>
<html>
	<head>
		<title>View Products | Milestone 1</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link href='https://fonts.googleapis.com/css?family=Lobster|Lato:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- EMBEDDED PHP HEADER -->
		<?php
			require('header.php') ;
		?>
		<div>
			<!-- DISPLAY MESSAGE AFTER FORM SUBMIT-->
			<h1>
				<?php echo $msg ?>
			</h1>
			<!-- PREVIOUS/BACK -->
			<p><a href="browse.php">Back</a></p>
		</div>
		<!-- EMBEDDED PHP FOOTER -->
		<?php
			require('footer.php') ;
		?>
	</body>
</html>