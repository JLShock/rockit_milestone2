<?php

	require_once('products.php');
	$options = '';

	foreach($products as $key => $product){
		$options .= "<option value='$key'>" . $product . '</option>' . '<br>';
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Browse Products | Milestone 1</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link href='https://fonts.googleapis.com/css?family=Lobster|Lato:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- EMBEDDED PHP HEADER -->
		<?php
			require('header.php') ;
		?>
			<!-- TITLE and PRODUCT LIST -->
		<div>
			<h1>Browse Products</h1>
			<form method="GET" action="view.php">
				<label>Product: 
					<select style="width: 175px" name="prod_id" required="true">
						<option value='' disabled selected style='display:none;'>Please select from:</option>
						<?= $options ?>
					</select>
				</label>
				<label>Quantity: 
					<input type="number" name="quantity" placeholder="1" min="1" style="width:50px" required="true">
				</label>
				<button type="submit">Submit</button>
			</form>
		</div>
		<!-- EMBEDDED PHP FOOTER -->
		<?php
			require('footer.php') ;
		?>
	</body>
</html>