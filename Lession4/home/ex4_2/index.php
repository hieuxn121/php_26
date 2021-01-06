<?php 
 	$products = [
 		'SP001' => [
 			'name' => "IP 7",
 			'price' => 5000000,
 			'quantity' => 20,
 			'img' => "https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-gold-600x600-1-600x600.jpg"
 		],
 		'SP002' => [
 			'name' => "IP 8",
 			'price' => 7500000,
 			'quantity' => 10,
 			'img' => "https://didongviet.vn/pub/media/catalog/product//8/-/8-min.jpg"
 		],
 		'SP003' => [
 			'name' => "IP X",
 			'price' => 10000000,
 			'quantity' => 25,
 			'img' => "https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-hh-600x600.jpg"
 		],
 		'SP004' => [
 			'name' => "IP 11",
 			'price' => 15000000,
 			'quantity' => 30,
 			'img' => "https://shopdunk.com/wp-content/uploads/2019/09/iP11Pro-2.jpg"
 		],
 		'SP005' => [
 			'name' => "IP 12",
 			'price' => 20000000,
 			'quantity' => 40,
 			'img' => "https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-new-600x600-200x200.jpg"
 		]
 	];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
    	a{
    		color: white;
    		text-decoration: none;
    	}
    	img{
    		width: 100px;
    		height: 100px;
    	}
    </style>
</head>
<body>
	<div class="container">
		<h1 align="center">Products</h1>
		<a href="cart.php"><div class="btn btn-info">View Cart</div></a>
		<table class="table" style="margin-top: 20px">
			<tr style="font-weight: bold">
				<td>Code</td>
				<td>Name</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Image</td>
				<td>#</td>
			</tr>
			<?php foreach ($products as $key => $product) { ?>
				<tr>
					<td><?php echo $key?></td>
					<td><?php echo $product['name']?></td>
					<td><?php echo $product['price']?></td>
					<td><?php echo $product['quantity']?></td>
					<td><img src="<?php echo $product['img'] ?>" alt=""></td>
					<td><a href="add_process.php?code=<?php echo($key)?>"><button class="btn btn-info">Add to Cart</button></a></td>
				</tr>
			<?php } ?>
		</table>

	</div>
</body>
</html>