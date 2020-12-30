<?php 
 	$products = [
 		[
 			'id' => 'SP1',
 			'name'=> 'Iphone 7 32GB',
 			'price'=> 5000000
 		],
 		[
 			'id' => 'SP2',
 			'name'=> 'Iphone 8 16GB',
 			'price'=> 6000000
 		],
 		[
 			'id' => 'SP3',
 			'name'=> 'Iphone X 32GB',
 			'price'=> 10000000
 		],
 		[
 			'id' => 'SP4',
 			'name'=> 'Iphone 12 256GB',
 			'price'=> 25000000
 		],
 		[
 			'id' => 'SP5',
 			'name'=> 'Iphone 11 Pro Max 256GB',
 			'price'=> 25000000
 		]
	];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<style>
  		table{
  			width: 80%;
  			margin: 50px auto;
  		}
  		table, th, td {
  			border: 1px solid black;
  			text-align: center;
  			padding: 10px;
		}
  	</style>
</head>
<body>
	<table>
		<tr>
			<td colspan="3" align="center">Danh sách sản phẩm</td>
			<td><a href="cart_detail.php">Xem giỏ hàng</a></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>Tên sản phẩm</td>
			<td>Đơn giá</td>
			<td>Hành động</td>
		</tr>
		<?php foreach ($products as $key => $product) { ?>
			<tr>
				<td><?php echo $product['id']; ?></td>
				<td><?php echo $product['name']; ?></td>
				<td><?php echo $product['price']; ?></td>
				<td><a href="add.php?id=<?php echo $product['id'] ?>">Add to cart</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>